<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f430aaed3321e559efbc62ebf0f3a99e547a6717a1abd2ae306e4982ee20bf42 extends Twig_Template
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
        $__internal_ac3d8ec9400ed1e2f39c0871397f16ae71c98f1e9af50e8f0596f92065a7678f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3d8ec9400ed1e2f39c0871397f16ae71c98f1e9af50e8f0596f92065a7678f->enter($__internal_ac3d8ec9400ed1e2f39c0871397f16ae71c98f1e9af50e8f0596f92065a7678f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_21f9e587796cc2a6de928e95f67aaf95ed24c48463cb52c74911bd5070af2a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f9e587796cc2a6de928e95f67aaf95ed24c48463cb52c74911bd5070af2a49->enter($__internal_21f9e587796cc2a6de928e95f67aaf95ed24c48463cb52c74911bd5070af2a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ac3d8ec9400ed1e2f39c0871397f16ae71c98f1e9af50e8f0596f92065a7678f->leave($__internal_ac3d8ec9400ed1e2f39c0871397f16ae71c98f1e9af50e8f0596f92065a7678f_prof);

        
        $__internal_21f9e587796cc2a6de928e95f67aaf95ed24c48463cb52c74911bd5070af2a49->leave($__internal_21f9e587796cc2a6de928e95f67aaf95ed24c48463cb52c74911bd5070af2a49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
