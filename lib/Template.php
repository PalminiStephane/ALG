<?php
class Template
{
    public static function render(string $view, array $params = [])
    {
        extract($params);
        ob_start();
        require __DIR__ . '/../templates/' . $view . '.php';
        $content = ob_get_clean();
        require __DIR__ . '/../templates/base.php';
    }
}
