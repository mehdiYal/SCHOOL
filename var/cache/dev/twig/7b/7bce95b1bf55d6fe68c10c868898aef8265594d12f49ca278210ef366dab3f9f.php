<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d5dfbf0cb1d99291da9e2ef500d67c0879926fd3d24ee9a51ce7f9be50470aca extends Twig_Template
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
        $__internal_7bb8d3d33bdba01a589327dc67141c802ec6f767b77de8a60f8b7ffab604084c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb8d3d33bdba01a589327dc67141c802ec6f767b77de8a60f8b7ffab604084c->enter($__internal_7bb8d3d33bdba01a589327dc67141c802ec6f767b77de8a60f8b7ffab604084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5cda560fb4fb47f36c4348622661949cc08eaa09bb36804e9ad2a8e2bc3e425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cda560fb4fb47f36c4348622661949cc08eaa09bb36804e9ad2a8e2bc3e425f->enter($__internal_5cda560fb4fb47f36c4348622661949cc08eaa09bb36804e9ad2a8e2bc3e425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7bb8d3d33bdba01a589327dc67141c802ec6f767b77de8a60f8b7ffab604084c->leave($__internal_7bb8d3d33bdba01a589327dc67141c802ec6f767b77de8a60f8b7ffab604084c_prof);

        
        $__internal_5cda560fb4fb47f36c4348622661949cc08eaa09bb36804e9ad2a8e2bc3e425f->leave($__internal_5cda560fb4fb47f36c4348622661949cc08eaa09bb36804e9ad2a8e2bc3e425f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
