<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_61d4d917dd2913016b4e14ab0a744eba5e7f3577d6f20b7400848b8ce18bbffc extends Twig_Template
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
        $__internal_9ab72f05580727ad0b6cf157ba38987f61833f88c99e7d81987a9aed49aad96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab72f05580727ad0b6cf157ba38987f61833f88c99e7d81987a9aed49aad96b->enter($__internal_9ab72f05580727ad0b6cf157ba38987f61833f88c99e7d81987a9aed49aad96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3278dc6f867a897c37eb7f4c4eecc3adca885dca247e2cffeca5024f01f3d7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3278dc6f867a897c37eb7f4c4eecc3adca885dca247e2cffeca5024f01f3d7bf->enter($__internal_3278dc6f867a897c37eb7f4c4eecc3adca885dca247e2cffeca5024f01f3d7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ab72f05580727ad0b6cf157ba38987f61833f88c99e7d81987a9aed49aad96b->leave($__internal_9ab72f05580727ad0b6cf157ba38987f61833f88c99e7d81987a9aed49aad96b_prof);

        
        $__internal_3278dc6f867a897c37eb7f4c4eecc3adca885dca247e2cffeca5024f01f3d7bf->leave($__internal_3278dc6f867a897c37eb7f4c4eecc3adca885dca247e2cffeca5024f01f3d7bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
