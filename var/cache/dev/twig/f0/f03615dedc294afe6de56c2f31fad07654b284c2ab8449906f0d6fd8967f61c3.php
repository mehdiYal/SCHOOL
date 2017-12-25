<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c9d25c808403cef6bce2417e9eda7a2e810adaf60f3b10003b96e7caff806fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f5e57e4eeb28dbc98e7b06e1cb31d1e5042c99b59acb27e18e30acef41f3802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5e57e4eeb28dbc98e7b06e1cb31d1e5042c99b59acb27e18e30acef41f3802->enter($__internal_9f5e57e4eeb28dbc98e7b06e1cb31d1e5042c99b59acb27e18e30acef41f3802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9624b32fd990468583bc1352026271ba61d7b9d8f7042121f90b23846add9b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9624b32fd990468583bc1352026271ba61d7b9d8f7042121f90b23846add9b54->enter($__internal_9624b32fd990468583bc1352026271ba61d7b9d8f7042121f90b23846add9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9f5e57e4eeb28dbc98e7b06e1cb31d1e5042c99b59acb27e18e30acef41f3802->leave($__internal_9f5e57e4eeb28dbc98e7b06e1cb31d1e5042c99b59acb27e18e30acef41f3802_prof);

        
        $__internal_9624b32fd990468583bc1352026271ba61d7b9d8f7042121f90b23846add9b54->leave($__internal_9624b32fd990468583bc1352026271ba61d7b9d8f7042121f90b23846add9b54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
