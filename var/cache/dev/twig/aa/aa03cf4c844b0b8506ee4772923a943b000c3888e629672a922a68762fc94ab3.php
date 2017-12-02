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
        $__internal_692cc5b43326e83606aacb5a382ed1a4715471752905b666308bdbc72c4bf06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692cc5b43326e83606aacb5a382ed1a4715471752905b666308bdbc72c4bf06b->enter($__internal_692cc5b43326e83606aacb5a382ed1a4715471752905b666308bdbc72c4bf06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_578791336329912dc40f7820b0d82906ffa5efbfa551512c8c053fce1c2c6ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578791336329912dc40f7820b0d82906ffa5efbfa551512c8c053fce1c2c6ad6->enter($__internal_578791336329912dc40f7820b0d82906ffa5efbfa551512c8c053fce1c2c6ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692cc5b43326e83606aacb5a382ed1a4715471752905b666308bdbc72c4bf06b->leave($__internal_692cc5b43326e83606aacb5a382ed1a4715471752905b666308bdbc72c4bf06b_prof);

        
        $__internal_578791336329912dc40f7820b0d82906ffa5efbfa551512c8c053fce1c2c6ad6->leave($__internal_578791336329912dc40f7820b0d82906ffa5efbfa551512c8c053fce1c2c6ad6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23ccf822236717109a6a7299d837d64f755f143c5a2dc227ecdaa8c9c93e2cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ccf822236717109a6a7299d837d64f755f143c5a2dc227ecdaa8c9c93e2cae->enter($__internal_23ccf822236717109a6a7299d837d64f755f143c5a2dc227ecdaa8c9c93e2cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3e70415dba95f8500019fb7bc0a57fef5b463851badc8349a84cf5da2992b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e70415dba95f8500019fb7bc0a57fef5b463851badc8349a84cf5da2992b0d->enter($__internal_d3e70415dba95f8500019fb7bc0a57fef5b463851badc8349a84cf5da2992b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d3e70415dba95f8500019fb7bc0a57fef5b463851badc8349a84cf5da2992b0d->leave($__internal_d3e70415dba95f8500019fb7bc0a57fef5b463851badc8349a84cf5da2992b0d_prof);

        
        $__internal_23ccf822236717109a6a7299d837d64f755f143c5a2dc227ecdaa8c9c93e2cae->leave($__internal_23ccf822236717109a6a7299d837d64f755f143c5a2dc227ecdaa8c9c93e2cae_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
