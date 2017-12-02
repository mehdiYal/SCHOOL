<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_843e34b366c31eb6aef4ba54c80411a58234cc080951802a1ae28ebddf72fab7 extends Twig_Template
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
        $__internal_e89cb88ff5fb593c6f2301fe454ee5c972cb3473034e4d37000319c0e28f3b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89cb88ff5fb593c6f2301fe454ee5c972cb3473034e4d37000319c0e28f3b72->enter($__internal_e89cb88ff5fb593c6f2301fe454ee5c972cb3473034e4d37000319c0e28f3b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5541d79272c9d4b4a046fe380aeffa72967de1d1a8782d8377cfece014f9be31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5541d79272c9d4b4a046fe380aeffa72967de1d1a8782d8377cfece014f9be31->enter($__internal_5541d79272c9d4b4a046fe380aeffa72967de1d1a8782d8377cfece014f9be31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e89cb88ff5fb593c6f2301fe454ee5c972cb3473034e4d37000319c0e28f3b72->leave($__internal_e89cb88ff5fb593c6f2301fe454ee5c972cb3473034e4d37000319c0e28f3b72_prof);

        
        $__internal_5541d79272c9d4b4a046fe380aeffa72967de1d1a8782d8377cfece014f9be31->leave($__internal_5541d79272c9d4b4a046fe380aeffa72967de1d1a8782d8377cfece014f9be31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
