<?php

/* default/dashSuperAdmin.html.twig */
class __TwigTemplate_4e7498af4fdae504c533bcf5643ef92622b62a948b9f1c0edbbc70f1f781ec54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", "default/dashSuperAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSuper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07e0e546b307b72d7a05aad7b26ed023bd6d15e4b583ec8b4aa4fa3e69790295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e0e546b307b72d7a05aad7b26ed023bd6d15e4b583ec8b4aa4fa3e69790295->enter($__internal_07e0e546b307b72d7a05aad7b26ed023bd6d15e4b583ec8b4aa4fa3e69790295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $__internal_469acc737f770b952f3c9b614d41b80b7952be6b9255a7c512fd7c81ef912998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469acc737f770b952f3c9b614d41b80b7952be6b9255a7c512fd7c81ef912998->enter($__internal_469acc737f770b952f3c9b614d41b80b7952be6b9255a7c512fd7c81ef912998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e0e546b307b72d7a05aad7b26ed023bd6d15e4b583ec8b4aa4fa3e69790295->leave($__internal_07e0e546b307b72d7a05aad7b26ed023bd6d15e4b583ec8b4aa4fa3e69790295_prof);

        
        $__internal_469acc737f770b952f3c9b614d41b80b7952be6b9255a7c512fd7c81ef912998->leave($__internal_469acc737f770b952f3c9b614d41b80b7952be6b9255a7c512fd7c81ef912998_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9b4f3a06bbb84e53509837d4fdbd796423df90cd2e08bbd7f2c09ffe7923224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b4f3a06bbb84e53509837d4fdbd796423df90cd2e08bbd7f2c09ffe7923224->enter($__internal_f9b4f3a06bbb84e53509837d4fdbd796423df90cd2e08bbd7f2c09ffe7923224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dd5a0a8dea7611d1582c12c9c8894dc4c5d83aa271b64e3212b565fe1828592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd5a0a8dea7611d1582c12c9c8894dc4c5d83aa271b64e3212b565fe1828592->enter($__internal_3dd5a0a8dea7611d1582c12c9c8894dc4c5d83aa271b64e3212b565fe1828592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_3dd5a0a8dea7611d1582c12c9c8894dc4c5d83aa271b64e3212b565fe1828592->leave($__internal_3dd5a0a8dea7611d1582c12c9c8894dc4c5d83aa271b64e3212b565fe1828592_prof);

        
        $__internal_f9b4f3a06bbb84e53509837d4fdbd796423df90cd2e08bbd7f2c09ffe7923224->leave($__internal_f9b4f3a06bbb84e53509837d4fdbd796423df90cd2e08bbd7f2c09ffe7923224_prof);

    }

    public function getTemplateName()
    {
        return "default/dashSuperAdmin.html.twig";
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
        return new Twig_Source("{% extends 'baseSuper.html.twig' %}

{% block body %}
    
{% endblock %}", "default/dashSuperAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\default\\dashSuperAdmin.html.twig");
    }
}
