<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_31df43f0df743c63ee238d4b05856eaab653bed6b358457074c64a1877c9715d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_66a939a8763238408d9d64be5b93f53ff61c3c98bf2fe83413d09be63a703a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a939a8763238408d9d64be5b93f53ff61c3c98bf2fe83413d09be63a703a31->enter($__internal_66a939a8763238408d9d64be5b93f53ff61c3c98bf2fe83413d09be63a703a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_297d5d97028b73dedc23111eeaee1158ace64c7086571590a3387a808e046d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297d5d97028b73dedc23111eeaee1158ace64c7086571590a3387a808e046d92->enter($__internal_297d5d97028b73dedc23111eeaee1158ace64c7086571590a3387a808e046d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a939a8763238408d9d64be5b93f53ff61c3c98bf2fe83413d09be63a703a31->leave($__internal_66a939a8763238408d9d64be5b93f53ff61c3c98bf2fe83413d09be63a703a31_prof);

        
        $__internal_297d5d97028b73dedc23111eeaee1158ace64c7086571590a3387a808e046d92->leave($__internal_297d5d97028b73dedc23111eeaee1158ace64c7086571590a3387a808e046d92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61174312a9c726c90e442a295b79244e61bd2ed9212aef1272bc6acd5ff09b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61174312a9c726c90e442a295b79244e61bd2ed9212aef1272bc6acd5ff09b02->enter($__internal_61174312a9c726c90e442a295b79244e61bd2ed9212aef1272bc6acd5ff09b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9c5794d54f618e5bb6427db677b8618a209079d9dee8bfb54ce715860af26c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c5794d54f618e5bb6427db677b8618a209079d9dee8bfb54ce715860af26c9->enter($__internal_d9c5794d54f618e5bb6427db677b8618a209079d9dee8bfb54ce715860af26c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d9c5794d54f618e5bb6427db677b8618a209079d9dee8bfb54ce715860af26c9->leave($__internal_d9c5794d54f618e5bb6427db677b8618a209079d9dee8bfb54ce715860af26c9_prof);

        
        $__internal_61174312a9c726c90e442a295b79244e61bd2ed9212aef1272bc6acd5ff09b02->leave($__internal_61174312a9c726c90e442a295b79244e61bd2ed9212aef1272bc6acd5ff09b02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
