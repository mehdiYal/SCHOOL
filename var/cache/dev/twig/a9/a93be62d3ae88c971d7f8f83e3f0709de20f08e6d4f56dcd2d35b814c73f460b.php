<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_5983079f05a643b888d8523702e5013648d787363c9c255e90f3dec419702f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5983079f05a643b888d8523702e5013648d787363c9c255e90f3dec419702f4b->enter($__internal_5983079f05a643b888d8523702e5013648d787363c9c255e90f3dec419702f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_53c5cd080b0e994bef8b9a957c18c1c65f603defd603c55f282952c05f1f21dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c5cd080b0e994bef8b9a957c18c1c65f603defd603c55f282952c05f1f21dd->enter($__internal_53c5cd080b0e994bef8b9a957c18c1c65f603defd603c55f282952c05f1f21dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5983079f05a643b888d8523702e5013648d787363c9c255e90f3dec419702f4b->leave($__internal_5983079f05a643b888d8523702e5013648d787363c9c255e90f3dec419702f4b_prof);

        
        $__internal_53c5cd080b0e994bef8b9a957c18c1c65f603defd603c55f282952c05f1f21dd->leave($__internal_53c5cd080b0e994bef8b9a957c18c1c65f603defd603c55f282952c05f1f21dd_prof);

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
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
