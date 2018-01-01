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
        $__internal_2496a3709ed18e126b02f0069074e4599937feb0039a2f0decf910f52fb1a546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2496a3709ed18e126b02f0069074e4599937feb0039a2f0decf910f52fb1a546->enter($__internal_2496a3709ed18e126b02f0069074e4599937feb0039a2f0decf910f52fb1a546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_92547fcf32c2055670ab64c477eea681133b61a43640b2e0f68d75077d6ae2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92547fcf32c2055670ab64c477eea681133b61a43640b2e0f68d75077d6ae2ca->enter($__internal_92547fcf32c2055670ab64c477eea681133b61a43640b2e0f68d75077d6ae2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2496a3709ed18e126b02f0069074e4599937feb0039a2f0decf910f52fb1a546->leave($__internal_2496a3709ed18e126b02f0069074e4599937feb0039a2f0decf910f52fb1a546_prof);

        
        $__internal_92547fcf32c2055670ab64c477eea681133b61a43640b2e0f68d75077d6ae2ca->leave($__internal_92547fcf32c2055670ab64c477eea681133b61a43640b2e0f68d75077d6ae2ca_prof);

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
