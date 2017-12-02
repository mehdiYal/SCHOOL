<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5f9c64f9852860a5200e02bc60eff39256fd10b82e3fac883acaafd1f6c6b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6057cae3efc5c10b537861e884bda4ef3be0c1a8e555eee0661f94eb14e53862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6057cae3efc5c10b537861e884bda4ef3be0c1a8e555eee0661f94eb14e53862->enter($__internal_6057cae3efc5c10b537861e884bda4ef3be0c1a8e555eee0661f94eb14e53862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_5d517ac746036bb6284d3c627c2f3b39d2eba706557b041972e24049efb290f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d517ac746036bb6284d3c627c2f3b39d2eba706557b041972e24049efb290f4->enter($__internal_5d517ac746036bb6284d3c627c2f3b39d2eba706557b041972e24049efb290f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6057cae3efc5c10b537861e884bda4ef3be0c1a8e555eee0661f94eb14e53862->leave($__internal_6057cae3efc5c10b537861e884bda4ef3be0c1a8e555eee0661f94eb14e53862_prof);

        
        $__internal_5d517ac746036bb6284d3c627c2f3b39d2eba706557b041972e24049efb290f4->leave($__internal_5d517ac746036bb6284d3c627c2f3b39d2eba706557b041972e24049efb290f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ddecc8cf6d178c6a70bbe105ca1d05bdb7248c12c02b38090b55bddeed18de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddecc8cf6d178c6a70bbe105ca1d05bdb7248c12c02b38090b55bddeed18de0->enter($__internal_0ddecc8cf6d178c6a70bbe105ca1d05bdb7248c12c02b38090b55bddeed18de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a32f7f1d51e5e435fb36326a6ae0b422bf096c04fe501dbbbc0e29d0aaa03fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32f7f1d51e5e435fb36326a6ae0b422bf096c04fe501dbbbc0e29d0aaa03fd9->enter($__internal_a32f7f1d51e5e435fb36326a6ae0b422bf096c04fe501dbbbc0e29d0aaa03fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a32f7f1d51e5e435fb36326a6ae0b422bf096c04fe501dbbbc0e29d0aaa03fd9->leave($__internal_a32f7f1d51e5e435fb36326a6ae0b422bf096c04fe501dbbbc0e29d0aaa03fd9_prof);

        
        $__internal_0ddecc8cf6d178c6a70bbe105ca1d05bdb7248c12c02b38090b55bddeed18de0->leave($__internal_0ddecc8cf6d178c6a70bbe105ca1d05bdb7248c12c02b38090b55bddeed18de0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
