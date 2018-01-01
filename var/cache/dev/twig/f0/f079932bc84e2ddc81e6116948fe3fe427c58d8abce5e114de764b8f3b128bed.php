<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2a7ec2fee1860fbd4ce682a6f70ff6e316712bf9f77104c63d52747a7d58748b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0de23a5e5313f165189786745be2bf48e6a0f91ad1723e27a028c8aa9247cf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de23a5e5313f165189786745be2bf48e6a0f91ad1723e27a028c8aa9247cf3f->enter($__internal_0de23a5e5313f165189786745be2bf48e6a0f91ad1723e27a028c8aa9247cf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d2c62e3f913f9f8377f34bc2a490da38de47085cfe6be64bbccb98060c30e7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c62e3f913f9f8377f34bc2a490da38de47085cfe6be64bbccb98060c30e7a5->enter($__internal_d2c62e3f913f9f8377f34bc2a490da38de47085cfe6be64bbccb98060c30e7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de23a5e5313f165189786745be2bf48e6a0f91ad1723e27a028c8aa9247cf3f->leave($__internal_0de23a5e5313f165189786745be2bf48e6a0f91ad1723e27a028c8aa9247cf3f_prof);

        
        $__internal_d2c62e3f913f9f8377f34bc2a490da38de47085cfe6be64bbccb98060c30e7a5->leave($__internal_d2c62e3f913f9f8377f34bc2a490da38de47085cfe6be64bbccb98060c30e7a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3910e292fe031ad1f77683e860b2c3dc2179edcb65bde7816eaf2f22f5cdd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3910e292fe031ad1f77683e860b2c3dc2179edcb65bde7816eaf2f22f5cdd76->enter($__internal_e3910e292fe031ad1f77683e860b2c3dc2179edcb65bde7816eaf2f22f5cdd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a0d500cc4b8af6681e0edb95798b1224623509134fea4902544e08ca8779041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0d500cc4b8af6681e0edb95798b1224623509134fea4902544e08ca8779041->enter($__internal_9a0d500cc4b8af6681e0edb95798b1224623509134fea4902544e08ca8779041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a0d500cc4b8af6681e0edb95798b1224623509134fea4902544e08ca8779041->leave($__internal_9a0d500cc4b8af6681e0edb95798b1224623509134fea4902544e08ca8779041_prof);

        
        $__internal_e3910e292fe031ad1f77683e860b2c3dc2179edcb65bde7816eaf2f22f5cdd76->leave($__internal_e3910e292fe031ad1f77683e860b2c3dc2179edcb65bde7816eaf2f22f5cdd76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
