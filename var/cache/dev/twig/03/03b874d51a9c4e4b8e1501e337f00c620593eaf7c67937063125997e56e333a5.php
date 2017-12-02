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
        $__internal_d4546a7452d616765f0905de8842f98b116b4413e7338d78db8719dbe36217f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4546a7452d616765f0905de8842f98b116b4413e7338d78db8719dbe36217f7->enter($__internal_d4546a7452d616765f0905de8842f98b116b4413e7338d78db8719dbe36217f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4948cee3deb9777f344be58c64845008c68c448c802a61ff01d397d0519622cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4948cee3deb9777f344be58c64845008c68c448c802a61ff01d397d0519622cb->enter($__internal_4948cee3deb9777f344be58c64845008c68c448c802a61ff01d397d0519622cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4546a7452d616765f0905de8842f98b116b4413e7338d78db8719dbe36217f7->leave($__internal_d4546a7452d616765f0905de8842f98b116b4413e7338d78db8719dbe36217f7_prof);

        
        $__internal_4948cee3deb9777f344be58c64845008c68c448c802a61ff01d397d0519622cb->leave($__internal_4948cee3deb9777f344be58c64845008c68c448c802a61ff01d397d0519622cb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c7097f18d0b6a76946e1e9262527e075511e6b826c7f4c881cf41e9e17b8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c7097f18d0b6a76946e1e9262527e075511e6b826c7f4c881cf41e9e17b8e0->enter($__internal_84c7097f18d0b6a76946e1e9262527e075511e6b826c7f4c881cf41e9e17b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a8f43581f697de086a3285ddcddad3926a78177927c5ca8be4be0e86ff3d92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8f43581f697de086a3285ddcddad3926a78177927c5ca8be4be0e86ff3d92c->enter($__internal_3a8f43581f697de086a3285ddcddad3926a78177927c5ca8be4be0e86ff3d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a8f43581f697de086a3285ddcddad3926a78177927c5ca8be4be0e86ff3d92c->leave($__internal_3a8f43581f697de086a3285ddcddad3926a78177927c5ca8be4be0e86ff3d92c_prof);

        
        $__internal_84c7097f18d0b6a76946e1e9262527e075511e6b826c7f4c881cf41e9e17b8e0->leave($__internal_84c7097f18d0b6a76946e1e9262527e075511e6b826c7f4c881cf41e9e17b8e0_prof);

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
