<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e6006ab0fd67a67091cc229e417464def7d1f6febf4f03dca2ef9db823de18b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1563d75b229539f55d3a5d16c3a978507fddae84d6b85d714c8df185d282682e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1563d75b229539f55d3a5d16c3a978507fddae84d6b85d714c8df185d282682e->enter($__internal_1563d75b229539f55d3a5d16c3a978507fddae84d6b85d714c8df185d282682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_63c40f7b5c66146ed9e7f42799ee354c9cec7c2d61e9a0858ef2ae8036ceffc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c40f7b5c66146ed9e7f42799ee354c9cec7c2d61e9a0858ef2ae8036ceffc5->enter($__internal_63c40f7b5c66146ed9e7f42799ee354c9cec7c2d61e9a0858ef2ae8036ceffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1563d75b229539f55d3a5d16c3a978507fddae84d6b85d714c8df185d282682e->leave($__internal_1563d75b229539f55d3a5d16c3a978507fddae84d6b85d714c8df185d282682e_prof);

        
        $__internal_63c40f7b5c66146ed9e7f42799ee354c9cec7c2d61e9a0858ef2ae8036ceffc5->leave($__internal_63c40f7b5c66146ed9e7f42799ee354c9cec7c2d61e9a0858ef2ae8036ceffc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd4c05b57a2b369499652acf05e4dac82d9c5625b81d02ab233f50ec83a4bfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4c05b57a2b369499652acf05e4dac82d9c5625b81d02ab233f50ec83a4bfe3->enter($__internal_fd4c05b57a2b369499652acf05e4dac82d9c5625b81d02ab233f50ec83a4bfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb3810cc0b4f925b1777225d98eb9d16778a0ef600e1234b510413eb5aa2963f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3810cc0b4f925b1777225d98eb9d16778a0ef600e1234b510413eb5aa2963f->enter($__internal_bb3810cc0b4f925b1777225d98eb9d16778a0ef600e1234b510413eb5aa2963f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bb3810cc0b4f925b1777225d98eb9d16778a0ef600e1234b510413eb5aa2963f->leave($__internal_bb3810cc0b4f925b1777225d98eb9d16778a0ef600e1234b510413eb5aa2963f_prof);

        
        $__internal_fd4c05b57a2b369499652acf05e4dac82d9c5625b81d02ab233f50ec83a4bfe3->leave($__internal_fd4c05b57a2b369499652acf05e4dac82d9c5625b81d02ab233f50ec83a4bfe3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
