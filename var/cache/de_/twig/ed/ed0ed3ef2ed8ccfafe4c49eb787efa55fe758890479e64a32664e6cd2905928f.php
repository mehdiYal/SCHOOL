<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5db0cdb36efbde3f8b47925aacab3f6dfb80b83868f9f45fdfa0cb3d9074967c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f7e8f0ffaeb36b8be2ac3710bc83dfe0bc48caddf93f2060952fade4b7c97cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e8f0ffaeb36b8be2ac3710bc83dfe0bc48caddf93f2060952fade4b7c97cf2->enter($__internal_f7e8f0ffaeb36b8be2ac3710bc83dfe0bc48caddf93f2060952fade4b7c97cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d4bfbd3d9de1ce9d11bdd8bc427f26447756c53c8ca62205faa82476700efe57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bfbd3d9de1ce9d11bdd8bc427f26447756c53c8ca62205faa82476700efe57->enter($__internal_d4bfbd3d9de1ce9d11bdd8bc427f26447756c53c8ca62205faa82476700efe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e8f0ffaeb36b8be2ac3710bc83dfe0bc48caddf93f2060952fade4b7c97cf2->leave($__internal_f7e8f0ffaeb36b8be2ac3710bc83dfe0bc48caddf93f2060952fade4b7c97cf2_prof);

        
        $__internal_d4bfbd3d9de1ce9d11bdd8bc427f26447756c53c8ca62205faa82476700efe57->leave($__internal_d4bfbd3d9de1ce9d11bdd8bc427f26447756c53c8ca62205faa82476700efe57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20235458addd10ccf5df098e3f5d3891c35305fe3a472c5648ec8084036ab377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20235458addd10ccf5df098e3f5d3891c35305fe3a472c5648ec8084036ab377->enter($__internal_20235458addd10ccf5df098e3f5d3891c35305fe3a472c5648ec8084036ab377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59ed201c7ea6da8fd3918970bd89f8722581abf2ab2118a1f4002bb8d6a52b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ed201c7ea6da8fd3918970bd89f8722581abf2ab2118a1f4002bb8d6a52b3e->enter($__internal_59ed201c7ea6da8fd3918970bd89f8722581abf2ab2118a1f4002bb8d6a52b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_59ed201c7ea6da8fd3918970bd89f8722581abf2ab2118a1f4002bb8d6a52b3e->leave($__internal_59ed201c7ea6da8fd3918970bd89f8722581abf2ab2118a1f4002bb8d6a52b3e_prof);

        
        $__internal_20235458addd10ccf5df098e3f5d3891c35305fe3a472c5648ec8084036ab377->leave($__internal_20235458addd10ccf5df098e3f5d3891c35305fe3a472c5648ec8084036ab377_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
