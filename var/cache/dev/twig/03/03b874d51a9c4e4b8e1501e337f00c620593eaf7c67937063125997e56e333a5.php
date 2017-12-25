<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4f30a614d8060f026ee47cd2e3cd2f20366100a3f3051b5bfb88a1aae519092a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e855f673ebbea130c03d15a5ebb4447f5a50cc5fba90dcd595ce538819fd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e855f673ebbea130c03d15a5ebb4447f5a50cc5fba90dcd595ce538819fd24->enter($__internal_63e855f673ebbea130c03d15a5ebb4447f5a50cc5fba90dcd595ce538819fd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_984e058bb15ced346cb6c0d5b1c71c9dd59bed269896a726d6491df066a5cde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984e058bb15ced346cb6c0d5b1c71c9dd59bed269896a726d6491df066a5cde0->enter($__internal_984e058bb15ced346cb6c0d5b1c71c9dd59bed269896a726d6491df066a5cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_63e855f673ebbea130c03d15a5ebb4447f5a50cc5fba90dcd595ce538819fd24->leave($__internal_63e855f673ebbea130c03d15a5ebb4447f5a50cc5fba90dcd595ce538819fd24_prof);

        
        $__internal_984e058bb15ced346cb6c0d5b1c71c9dd59bed269896a726d6491df066a5cde0->leave($__internal_984e058bb15ced346cb6c0d5b1c71c9dd59bed269896a726d6491df066a5cde0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c20fbf88b13a127c7073e16f4c60fc068d94d860b7be2765b9f24db3c4fbf2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20fbf88b13a127c7073e16f4c60fc068d94d860b7be2765b9f24db3c4fbf2fd->enter($__internal_c20fbf88b13a127c7073e16f4c60fc068d94d860b7be2765b9f24db3c4fbf2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bca63fe52272f518f890632eaeeceeab1997981e940d49dfb5081daa84de640d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca63fe52272f518f890632eaeeceeab1997981e940d49dfb5081daa84de640d->enter($__internal_bca63fe52272f518f890632eaeeceeab1997981e940d49dfb5081daa84de640d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bca63fe52272f518f890632eaeeceeab1997981e940d49dfb5081daa84de640d->leave($__internal_bca63fe52272f518f890632eaeeceeab1997981e940d49dfb5081daa84de640d_prof);

        
        $__internal_c20fbf88b13a127c7073e16f4c60fc068d94d860b7be2765b9f24db3c4fbf2fd->leave($__internal_c20fbf88b13a127c7073e16f4c60fc068d94d860b7be2765b9f24db3c4fbf2fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
