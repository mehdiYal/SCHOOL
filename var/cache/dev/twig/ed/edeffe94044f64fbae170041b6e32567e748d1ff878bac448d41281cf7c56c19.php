<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a77663f3594b93e5960b7f8c9faba40c3c9cf7d111d4caa16fe5660ea1d1eaf extends Twig_Template
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
        $__internal_76bf4da99925a3ad53fd2c209d8cd93095851180c55ea39c99c8115c46765ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bf4da99925a3ad53fd2c209d8cd93095851180c55ea39c99c8115c46765ac9->enter($__internal_76bf4da99925a3ad53fd2c209d8cd93095851180c55ea39c99c8115c46765ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0cc8f8844f0911b6f16eb0992449bcef89bdc8697b7d2ef7a3adda825aecdc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc8f8844f0911b6f16eb0992449bcef89bdc8697b7d2ef7a3adda825aecdc1a->enter($__internal_0cc8f8844f0911b6f16eb0992449bcef89bdc8697b7d2ef7a3adda825aecdc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_76bf4da99925a3ad53fd2c209d8cd93095851180c55ea39c99c8115c46765ac9->leave($__internal_76bf4da99925a3ad53fd2c209d8cd93095851180c55ea39c99c8115c46765ac9_prof);

        
        $__internal_0cc8f8844f0911b6f16eb0992449bcef89bdc8697b7d2ef7a3adda825aecdc1a->leave($__internal_0cc8f8844f0911b6f16eb0992449bcef89bdc8697b7d2ef7a3adda825aecdc1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
