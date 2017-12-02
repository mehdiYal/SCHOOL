<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_f889879975406dc9800e297c22c059cdad8e3f6de0157d2256f590de922988d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f889879975406dc9800e297c22c059cdad8e3f6de0157d2256f590de922988d3->enter($__internal_f889879975406dc9800e297c22c059cdad8e3f6de0157d2256f590de922988d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3e7652dda1a2f4f75b0f63d7689b411705b375b2a40b0671abbd5ab4621c30cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7652dda1a2f4f75b0f63d7689b411705b375b2a40b0671abbd5ab4621c30cd->enter($__internal_3e7652dda1a2f4f75b0f63d7689b411705b375b2a40b0671abbd5ab4621c30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f889879975406dc9800e297c22c059cdad8e3f6de0157d2256f590de922988d3->leave($__internal_f889879975406dc9800e297c22c059cdad8e3f6de0157d2256f590de922988d3_prof);

        
        $__internal_3e7652dda1a2f4f75b0f63d7689b411705b375b2a40b0671abbd5ab4621c30cd->leave($__internal_3e7652dda1a2f4f75b0f63d7689b411705b375b2a40b0671abbd5ab4621c30cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
