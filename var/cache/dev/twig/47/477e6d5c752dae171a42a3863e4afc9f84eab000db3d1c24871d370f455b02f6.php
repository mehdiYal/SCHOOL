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
        $__internal_a055a18ca1bd1351bfbb456925fbb669030a3bbb323aa853d2ffdba918521949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a055a18ca1bd1351bfbb456925fbb669030a3bbb323aa853d2ffdba918521949->enter($__internal_a055a18ca1bd1351bfbb456925fbb669030a3bbb323aa853d2ffdba918521949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a5ebfa9d594059854df581a2ff8bfc894eff889aa1a236b0edc147a78aaec69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ebfa9d594059854df581a2ff8bfc894eff889aa1a236b0edc147a78aaec69d->enter($__internal_a5ebfa9d594059854df581a2ff8bfc894eff889aa1a236b0edc147a78aaec69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a055a18ca1bd1351bfbb456925fbb669030a3bbb323aa853d2ffdba918521949->leave($__internal_a055a18ca1bd1351bfbb456925fbb669030a3bbb323aa853d2ffdba918521949_prof);

        
        $__internal_a5ebfa9d594059854df581a2ff8bfc894eff889aa1a236b0edc147a78aaec69d->leave($__internal_a5ebfa9d594059854df581a2ff8bfc894eff889aa1a236b0edc147a78aaec69d_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
