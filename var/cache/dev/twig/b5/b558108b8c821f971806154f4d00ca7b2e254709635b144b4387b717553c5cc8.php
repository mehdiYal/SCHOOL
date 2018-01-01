<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9e1cfcc1be44cad9258b2ba1ffd4676edaa92475d4be9f8d3ec43d504cedd8f5 extends Twig_Template
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
        $__internal_1b2347fbd9a21f42af7dd254cbe9465793d92c9e0a6d1ec6008f8234ab5d5d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2347fbd9a21f42af7dd254cbe9465793d92c9e0a6d1ec6008f8234ab5d5d3e->enter($__internal_1b2347fbd9a21f42af7dd254cbe9465793d92c9e0a6d1ec6008f8234ab5d5d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9d164f6ac44b4f405d940d724ad12fa656328d42f271914ca7767d6ee60c0177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d164f6ac44b4f405d940d724ad12fa656328d42f271914ca7767d6ee60c0177->enter($__internal_9d164f6ac44b4f405d940d724ad12fa656328d42f271914ca7767d6ee60c0177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b2347fbd9a21f42af7dd254cbe9465793d92c9e0a6d1ec6008f8234ab5d5d3e->leave($__internal_1b2347fbd9a21f42af7dd254cbe9465793d92c9e0a6d1ec6008f8234ab5d5d3e_prof);

        
        $__internal_9d164f6ac44b4f405d940d724ad12fa656328d42f271914ca7767d6ee60c0177->leave($__internal_9d164f6ac44b4f405d940d724ad12fa656328d42f271914ca7767d6ee60c0177_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a372b0acb242a03ee629ae377f9d89ba4ff32a29ece6fca5c890213e626e178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a372b0acb242a03ee629ae377f9d89ba4ff32a29ece6fca5c890213e626e178->enter($__internal_0a372b0acb242a03ee629ae377f9d89ba4ff32a29ece6fca5c890213e626e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f06fc53f215c411e2432e3fa2b5dbe26e8ce2b677fe657226999f11cec461301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06fc53f215c411e2432e3fa2b5dbe26e8ce2b677fe657226999f11cec461301->enter($__internal_f06fc53f215c411e2432e3fa2b5dbe26e8ce2b677fe657226999f11cec461301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f06fc53f215c411e2432e3fa2b5dbe26e8ce2b677fe657226999f11cec461301->leave($__internal_f06fc53f215c411e2432e3fa2b5dbe26e8ce2b677fe657226999f11cec461301_prof);

        
        $__internal_0a372b0acb242a03ee629ae377f9d89ba4ff32a29ece6fca5c890213e626e178->leave($__internal_0a372b0acb242a03ee629ae377f9d89ba4ff32a29ece6fca5c890213e626e178_prof);

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
