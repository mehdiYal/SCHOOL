<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3e07cade52757437282b09a7bb5ef623fd217b6229c8d7cd36debe37a544e2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6a350b7e060868638484f298407b6598bc003f44980546fbb0d8abe7f8114043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a350b7e060868638484f298407b6598bc003f44980546fbb0d8abe7f8114043->enter($__internal_6a350b7e060868638484f298407b6598bc003f44980546fbb0d8abe7f8114043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_793160125c3efcd456f511d79bc556e985b73b6f36943689c660e166674854c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793160125c3efcd456f511d79bc556e985b73b6f36943689c660e166674854c7->enter($__internal_793160125c3efcd456f511d79bc556e985b73b6f36943689c660e166674854c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a350b7e060868638484f298407b6598bc003f44980546fbb0d8abe7f8114043->leave($__internal_6a350b7e060868638484f298407b6598bc003f44980546fbb0d8abe7f8114043_prof);

        
        $__internal_793160125c3efcd456f511d79bc556e985b73b6f36943689c660e166674854c7->leave($__internal_793160125c3efcd456f511d79bc556e985b73b6f36943689c660e166674854c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a89c4a8e20fbdee0568e99f6d27d260dfd182a7f7435ae8977a611fa1d2a4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a89c4a8e20fbdee0568e99f6d27d260dfd182a7f7435ae8977a611fa1d2a4be->enter($__internal_5a89c4a8e20fbdee0568e99f6d27d260dfd182a7f7435ae8977a611fa1d2a4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3641ae9b98322fbaceaad21a54b89495e6a80c701c8579ba159549662d4b68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3641ae9b98322fbaceaad21a54b89495e6a80c701c8579ba159549662d4b68e->enter($__internal_f3641ae9b98322fbaceaad21a54b89495e6a80c701c8579ba159549662d4b68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f3641ae9b98322fbaceaad21a54b89495e6a80c701c8579ba159549662d4b68e->leave($__internal_f3641ae9b98322fbaceaad21a54b89495e6a80c701c8579ba159549662d4b68e_prof);

        
        $__internal_5a89c4a8e20fbdee0568e99f6d27d260dfd182a7f7435ae8977a611fa1d2a4be->leave($__internal_5a89c4a8e20fbdee0568e99f6d27d260dfd182a7f7435ae8977a611fa1d2a4be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
