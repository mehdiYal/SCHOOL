<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_adf8b0c5bb4ee6ec2edaaf0ed26f5bb0650fa36222b1517988991857936c67d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7d96b54c56572d3ea722737f095e41703606d8fda2e8b609b0d9c4d761502b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d96b54c56572d3ea722737f095e41703606d8fda2e8b609b0d9c4d761502b61->enter($__internal_7d96b54c56572d3ea722737f095e41703606d8fda2e8b609b0d9c4d761502b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1c42aed25022bc4b829c0b7ebce6c220487c8136711c03687f0e9c6d0f325280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c42aed25022bc4b829c0b7ebce6c220487c8136711c03687f0e9c6d0f325280->enter($__internal_1c42aed25022bc4b829c0b7ebce6c220487c8136711c03687f0e9c6d0f325280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d96b54c56572d3ea722737f095e41703606d8fda2e8b609b0d9c4d761502b61->leave($__internal_7d96b54c56572d3ea722737f095e41703606d8fda2e8b609b0d9c4d761502b61_prof);

        
        $__internal_1c42aed25022bc4b829c0b7ebce6c220487c8136711c03687f0e9c6d0f325280->leave($__internal_1c42aed25022bc4b829c0b7ebce6c220487c8136711c03687f0e9c6d0f325280_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17fdfabe259befdcc9ec365ed9910d058c206dfa722d1c0ada4d2a3f673649e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fdfabe259befdcc9ec365ed9910d058c206dfa722d1c0ada4d2a3f673649e3->enter($__internal_17fdfabe259befdcc9ec365ed9910d058c206dfa722d1c0ada4d2a3f673649e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e59ebc0ab5f35d536326770c266e29c112bcfe978f2874cdd5557fa1ff2c25c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59ebc0ab5f35d536326770c266e29c112bcfe978f2874cdd5557fa1ff2c25c1->enter($__internal_e59ebc0ab5f35d536326770c266e29c112bcfe978f2874cdd5557fa1ff2c25c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e59ebc0ab5f35d536326770c266e29c112bcfe978f2874cdd5557fa1ff2c25c1->leave($__internal_e59ebc0ab5f35d536326770c266e29c112bcfe978f2874cdd5557fa1ff2c25c1_prof);

        
        $__internal_17fdfabe259befdcc9ec365ed9910d058c206dfa722d1c0ada4d2a3f673649e3->leave($__internal_17fdfabe259befdcc9ec365ed9910d058c206dfa722d1c0ada4d2a3f673649e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
