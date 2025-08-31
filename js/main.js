// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            this.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
        });

        // Close menu when a navigation link is selected
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileToggle.textContent = '☰';
                }
            });
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (mobileToggle && navLinks && !event.target.closest('nav') && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            mobileToggle.textContent = '☰';
        }
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 100;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Header scroll effect
let lastScroll = 0;
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
        header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
    } else {
        header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
        header.style.backgroundColor = '#FFFFFF';
    }
    
    // Hide/show header on scroll
    if (currentScroll > lastScroll && currentScroll > 300) {
        header.style.transform = 'translateY(-100%)';
    } else {
        header.style.transform = 'translateY(0)';
    }
    
    lastScroll = currentScroll;
});

// Form validation
const bookingForm = document.querySelector('.booking-form');
if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
        const phone = document.getElementById('phone').value;
        const phoneRegex = /^[0-9]{10}$/;
        
        if (!phoneRegex.test(phone.replace(/\s/g, ''))) {
            e.preventDefault();
            alert('Veuillez entrer un numéro de téléphone valide (10 chiffres)');
            return false;
        }
        
        // Date validation - not in the past
        const selectedDate = new Date(document.getElementById('date').value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            e.preventDefault();
            alert('Veuillez sélectionner une date future');
            return false;
        }
        
        // Show loading state
        const submitButton = e.target.querySelector('.submit-button');
        submitButton.innerHTML = '<span class="loading"></span> Envoi en cours...';
        submitButton.disabled = true;
    });
}

// Animate elements on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all service cards and sections
document.querySelectorAll('.service-card, .service-detail, .testimonial').forEach(el => {
    el.style.opacity = '0';
    observer.observe(el);
});

// Active navigation highlighting
const currentPage = window.location.pathname.split('/').pop() || 'index.php';
const normalizedCurrent = currentPage.replace(/\.php$/, '');
document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    const normalizedHref = href.split('/').pop().replace(/\.php$/, '');
    if (normalizedHref === normalizedCurrent) {
        link.classList.add('active');
    }
});

// Format phone input
const phoneInput = document.getElementById('phone');
if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\s/g, '');
        let formattedValue = '';
        
        for (let i = 0; i < value.length && i < 10; i++) {
            if (i > 0 && i % 2 === 0) {
                formattedValue += ' ';
            }
            formattedValue += value[i];
        }
        
        e.target.value = formattedValue;
    });
}

// Testimonial slider (if multiple testimonials)
const testimonials = document.querySelectorAll('.testimonial');
if (testimonials.length > 1) {
    let currentTestimonial = 0;
    const track = document.querySelector('.testimonial-track');
    const prevButton = document.querySelector('.testimonial-nav.prev');
    const nextButton = document.querySelector('.testimonial-nav.next');
    let autoAdvance;

    function showTestimonial(index) {
        if (track) {
            track.style.transform = `translateX(-${index * 100}%)`;
        }
    }

    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
    }

    function prevTestimonial() {
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        showTestimonial(currentTestimonial);
    }

    function resetAutoAdvance() {
        clearInterval(autoAdvance);
        autoAdvance = setInterval(nextTestimonial, 10000);
    }

    // Show first testimonial
    showTestimonial(0);
    autoAdvance = setInterval(nextTestimonial, 10000);

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', () => {
            prevTestimonial();
            resetAutoAdvance();
        });
        nextButton.addEventListener('click', () => {
            nextTestimonial();
            resetAutoAdvance();
        });
    }
}

// FAQ toggle animation
document.querySelectorAll('details').forEach(detail => {
    detail.addEventListener('toggle', function() {
        if (this.open) {
            this.style.backgroundColor = '#FFFFFF';
            this.style.boxShadow = '0 4px 20px rgba(0,0,0,0.05)';
        } else {
            this.style.backgroundColor = '#FAF9F7';
            this.style.boxShadow = 'none';
        }
    });
});

// Service hover effects
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.querySelector('.service-icon').style.transform = 'scale(1.1)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.querySelector('.service-icon').style.transform = 'scale(1)';
    });
});

// Initialize tooltips for form fields
const formInputs = document.querySelectorAll('input, select, textarea');
formInputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-2px)';
    });
    
    input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
    });
});