<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7cfbe0a4f24069a03a1cc9155454a34bf83ecbb17d3979acc6625d7fb8070744 extends Twig_Template
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
        $__internal_07b48bc504ccd32cd51f30e41d9a49cc633b5030dc807a9d500bab9fb4c37805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b48bc504ccd32cd51f30e41d9a49cc633b5030dc807a9d500bab9fb4c37805->enter($__internal_07b48bc504ccd32cd51f30e41d9a49cc633b5030dc807a9d500bab9fb4c37805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_923e245cce18f267ee934f83e798930fc0c1f679937e0ca254560d0ce9760254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923e245cce18f267ee934f83e798930fc0c1f679937e0ca254560d0ce9760254->enter($__internal_923e245cce18f267ee934f83e798930fc0c1f679937e0ca254560d0ce9760254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_07b48bc504ccd32cd51f30e41d9a49cc633b5030dc807a9d500bab9fb4c37805->leave($__internal_07b48bc504ccd32cd51f30e41d9a49cc633b5030dc807a9d500bab9fb4c37805_prof);

        
        $__internal_923e245cce18f267ee934f83e798930fc0c1f679937e0ca254560d0ce9760254->leave($__internal_923e245cce18f267ee934f83e798930fc0c1f679937e0ca254560d0ce9760254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
