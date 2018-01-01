<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_aa2bfed890f5ae0177ced5b215f15495a59d2f2addfdda437585c4c6044441fb extends Twig_Template
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
        $__internal_7b255ffe3b960e11032b86166589051940f26977ea0211bc6ca9c7c814d0872e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b255ffe3b960e11032b86166589051940f26977ea0211bc6ca9c7c814d0872e->enter($__internal_7b255ffe3b960e11032b86166589051940f26977ea0211bc6ca9c7c814d0872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8710055f308da25eabb1428173d7ebd525a7c7a8a2450c41e7d572b1a5555e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8710055f308da25eabb1428173d7ebd525a7c7a8a2450c41e7d572b1a5555e26->enter($__internal_8710055f308da25eabb1428173d7ebd525a7c7a8a2450c41e7d572b1a5555e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7b255ffe3b960e11032b86166589051940f26977ea0211bc6ca9c7c814d0872e->leave($__internal_7b255ffe3b960e11032b86166589051940f26977ea0211bc6ca9c7c814d0872e_prof);

        
        $__internal_8710055f308da25eabb1428173d7ebd525a7c7a8a2450c41e7d572b1a5555e26->leave($__internal_8710055f308da25eabb1428173d7ebd525a7c7a8a2450c41e7d572b1a5555e26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
