<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c7eaf3cb8bc41c3fce791bbaeee6eb22a76beec1ffe4254d5f79e4d8bb09fcae extends Twig_Template
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
        $__internal_cb769af51f8c41f739f38a3f2a422896a270095d00c95a8f7914d436d1e9e1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb769af51f8c41f739f38a3f2a422896a270095d00c95a8f7914d436d1e9e1bd->enter($__internal_cb769af51f8c41f739f38a3f2a422896a270095d00c95a8f7914d436d1e9e1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_58d439184fc28db4e54007259a05a7db548d89f9b10fb0a59a57af8a3b83f5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d439184fc28db4e54007259a05a7db548d89f9b10fb0a59a57af8a3b83f5da->enter($__internal_58d439184fc28db4e54007259a05a7db548d89f9b10fb0a59a57af8a3b83f5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cb769af51f8c41f739f38a3f2a422896a270095d00c95a8f7914d436d1e9e1bd->leave($__internal_cb769af51f8c41f739f38a3f2a422896a270095d00c95a8f7914d436d1e9e1bd_prof);

        
        $__internal_58d439184fc28db4e54007259a05a7db548d89f9b10fb0a59a57af8a3b83f5da->leave($__internal_58d439184fc28db4e54007259a05a7db548d89f9b10fb0a59a57af8a3b83f5da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
