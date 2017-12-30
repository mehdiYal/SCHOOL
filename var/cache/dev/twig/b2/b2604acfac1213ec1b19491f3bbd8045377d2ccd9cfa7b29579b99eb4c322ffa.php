<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_27fca72c8bbc69ff322a60874b2dee438222aeafb12eb7e9fafb6843df3229a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_225e04bf913def1fbfbd6aaaf1f362a8773411652094de37e043fd4e68f47661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225e04bf913def1fbfbd6aaaf1f362a8773411652094de37e043fd4e68f47661->enter($__internal_225e04bf913def1fbfbd6aaaf1f362a8773411652094de37e043fd4e68f47661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ce4da1f3ea9b08d7fcb2025c18ba2d640978ce835867c28b2f38b2601c05a686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4da1f3ea9b08d7fcb2025c18ba2d640978ce835867c28b2f38b2601c05a686->enter($__internal_ce4da1f3ea9b08d7fcb2025c18ba2d640978ce835867c28b2f38b2601c05a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_225e04bf913def1fbfbd6aaaf1f362a8773411652094de37e043fd4e68f47661->leave($__internal_225e04bf913def1fbfbd6aaaf1f362a8773411652094de37e043fd4e68f47661_prof);

        
        $__internal_ce4da1f3ea9b08d7fcb2025c18ba2d640978ce835867c28b2f38b2601c05a686->leave($__internal_ce4da1f3ea9b08d7fcb2025c18ba2d640978ce835867c28b2f38b2601c05a686_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d229a4bda159c54614cb87190dd5e4cd30ea019db9d1e0d64c20ad9db65a7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d229a4bda159c54614cb87190dd5e4cd30ea019db9d1e0d64c20ad9db65a7a0->enter($__internal_3d229a4bda159c54614cb87190dd5e4cd30ea019db9d1e0d64c20ad9db65a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1c431d49bbed7ab02ad10918e096930f59ad17fed4a02c4b5f68bb55872d721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c431d49bbed7ab02ad10918e096930f59ad17fed4a02c4b5f68bb55872d721->enter($__internal_e1c431d49bbed7ab02ad10918e096930f59ad17fed4a02c4b5f68bb55872d721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e1c431d49bbed7ab02ad10918e096930f59ad17fed4a02c4b5f68bb55872d721->leave($__internal_e1c431d49bbed7ab02ad10918e096930f59ad17fed4a02c4b5f68bb55872d721_prof);

        
        $__internal_3d229a4bda159c54614cb87190dd5e4cd30ea019db9d1e0d64c20ad9db65a7a0->leave($__internal_3d229a4bda159c54614cb87190dd5e4cd30ea019db9d1e0d64c20ad9db65a7a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
