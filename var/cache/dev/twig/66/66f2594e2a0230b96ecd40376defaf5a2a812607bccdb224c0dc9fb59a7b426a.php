<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_5c18503be1ae3e825580a6e3852bcb980b2b75be5320fa814efea49a2f29bdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c18503be1ae3e825580a6e3852bcb980b2b75be5320fa814efea49a2f29bdcb->enter($__internal_5c18503be1ae3e825580a6e3852bcb980b2b75be5320fa814efea49a2f29bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fed70fb81d2ea4d4755537bcfbf7a2662bf023b0a8095c015cfc1477d05f761c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed70fb81d2ea4d4755537bcfbf7a2662bf023b0a8095c015cfc1477d05f761c->enter($__internal_fed70fb81d2ea4d4755537bcfbf7a2662bf023b0a8095c015cfc1477d05f761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5c18503be1ae3e825580a6e3852bcb980b2b75be5320fa814efea49a2f29bdcb->leave($__internal_5c18503be1ae3e825580a6e3852bcb980b2b75be5320fa814efea49a2f29bdcb_prof);

        
        $__internal_fed70fb81d2ea4d4755537bcfbf7a2662bf023b0a8095c015cfc1477d05f761c->leave($__internal_fed70fb81d2ea4d4755537bcfbf7a2662bf023b0a8095c015cfc1477d05f761c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
