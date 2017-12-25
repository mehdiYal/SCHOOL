<?php

/* PaymentBundle:PaymentController:init.html.twig */
class __TwigTemplate_631619c844803692c7649ade8a7a5fb58ce5601dff5835d48b1c960dc17f885a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PaymentBundle:PaymentController:init.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d515c81f07d85415648e9108e4b86bb957ada4ba457524a4a95ebab238be48de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d515c81f07d85415648e9108e4b86bb957ada4ba457524a4a95ebab238be48de->enter($__internal_d515c81f07d85415648e9108e4b86bb957ada4ba457524a4a95ebab238be48de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:PaymentController:init.html.twig"));

        $__internal_c5c764ae77ae399b1fc8230a066b71b7917e2242bf3291abcc1286706d46f8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c764ae77ae399b1fc8230a066b71b7917e2242bf3291abcc1286706d46f8d3->enter($__internal_c5c764ae77ae399b1fc8230a066b71b7917e2242bf3291abcc1286706d46f8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaymentBundle:PaymentController:init.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d515c81f07d85415648e9108e4b86bb957ada4ba457524a4a95ebab238be48de->leave($__internal_d515c81f07d85415648e9108e4b86bb957ada4ba457524a4a95ebab238be48de_prof);

        
        $__internal_c5c764ae77ae399b1fc8230a066b71b7917e2242bf3291abcc1286706d46f8d3->leave($__internal_c5c764ae77ae399b1fc8230a066b71b7917e2242bf3291abcc1286706d46f8d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86b39d14ce52a7a8001132679d1c894d6eef1a9f18ac58281700ee72b3527557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b39d14ce52a7a8001132679d1c894d6eef1a9f18ac58281700ee72b3527557->enter($__internal_86b39d14ce52a7a8001132679d1c894d6eef1a9f18ac58281700ee72b3527557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_001362e09e7c79b7a740595c7007709a8398a19f88c1c138e55858b40d1a9e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001362e09e7c79b7a740595c7007709a8398a19f88c1c138e55858b40d1a9e9c->enter($__internal_001362e09e7c79b7a740595c7007709a8398a19f88c1c138e55858b40d1a9e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PaymentBundle:PaymentController:init";
        
        $__internal_001362e09e7c79b7a740595c7007709a8398a19f88c1c138e55858b40d1a9e9c->leave($__internal_001362e09e7c79b7a740595c7007709a8398a19f88c1c138e55858b40d1a9e9c_prof);

        
        $__internal_86b39d14ce52a7a8001132679d1c894d6eef1a9f18ac58281700ee72b3527557->leave($__internal_86b39d14ce52a7a8001132679d1c894d6eef1a9f18ac58281700ee72b3527557_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_902caa1173d03e5868e1eadc960ac56d92f7cc0011727712fcfe5e74348fdce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902caa1173d03e5868e1eadc960ac56d92f7cc0011727712fcfe5e74348fdce4->enter($__internal_902caa1173d03e5868e1eadc960ac56d92f7cc0011727712fcfe5e74348fdce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2fbbcacb698b732b245dd3082b02bb845d2ee0ca3367d604f3a9f5734593830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fbbcacb698b732b245dd3082b02bb845d2ee0ca3367d604f3a9f5734593830->enter($__internal_c2fbbcacb698b732b245dd3082b02bb845d2ee0ca3367d604f3a9f5734593830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the PaymentController:init page</h1>
";
        
        $__internal_c2fbbcacb698b732b245dd3082b02bb845d2ee0ca3367d604f3a9f5734593830->leave($__internal_c2fbbcacb698b732b245dd3082b02bb845d2ee0ca3367d604f3a9f5734593830_prof);

        
        $__internal_902caa1173d03e5868e1eadc960ac56d92f7cc0011727712fcfe5e74348fdce4->leave($__internal_902caa1173d03e5868e1eadc960ac56d92f7cc0011727712fcfe5e74348fdce4_prof);

    }

    public function getTemplateName()
    {
        return "PaymentBundle:PaymentController:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}PaymentBundle:PaymentController:init{% endblock %}

{% block body %}
<h1>Welcome to the PaymentController:init page</h1>
{% endblock %}
", "PaymentBundle:PaymentController:init.html.twig", "/Applications/MAMP/htdocs/Schoolium/src/PaymentBundle/Resources/views/PaymentController/init.html.twig");
    }
}
