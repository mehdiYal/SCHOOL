<?php

/* ::base.html.twig */
class __TwigTemplate_c716e6b843194a5f7c9d1869e83c2280984352b93af26c5fe59e35b8ef0f0e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98acd1b9047d496476c26bd96c0dc5f0c5c99a9e6f6f6bd758f9e7c38c46f322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98acd1b9047d496476c26bd96c0dc5f0c5c99a9e6f6f6bd758f9e7c38c46f322->enter($__internal_98acd1b9047d496476c26bd96c0dc5f0c5c99a9e6f6f6bd758f9e7c38c46f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8ea8dc0f57af942b40108da3dcbb34e4e60ff90d542df1eb86518680a56e96c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea8dc0f57af942b40108da3dcbb34e4e60ff90d542df1eb86518680a56e96c6->enter($__internal_8ea8dc0f57af942b40108da3dcbb34e4e60ff90d542df1eb86518680a56e96c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_98acd1b9047d496476c26bd96c0dc5f0c5c99a9e6f6f6bd758f9e7c38c46f322->leave($__internal_98acd1b9047d496476c26bd96c0dc5f0c5c99a9e6f6f6bd758f9e7c38c46f322_prof);

        
        $__internal_8ea8dc0f57af942b40108da3dcbb34e4e60ff90d542df1eb86518680a56e96c6->leave($__internal_8ea8dc0f57af942b40108da3dcbb34e4e60ff90d542df1eb86518680a56e96c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae7d3759e78e3bca37110b2bea06541f0c9092181e612cf1effc526c6611e069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7d3759e78e3bca37110b2bea06541f0c9092181e612cf1effc526c6611e069->enter($__internal_ae7d3759e78e3bca37110b2bea06541f0c9092181e612cf1effc526c6611e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d03d7be6877c870cf7264b65407a9f54755cf14ce26c87ee2562215f548cc664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03d7be6877c870cf7264b65407a9f54755cf14ce26c87ee2562215f548cc664->enter($__internal_d03d7be6877c870cf7264b65407a9f54755cf14ce26c87ee2562215f548cc664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d03d7be6877c870cf7264b65407a9f54755cf14ce26c87ee2562215f548cc664->leave($__internal_d03d7be6877c870cf7264b65407a9f54755cf14ce26c87ee2562215f548cc664_prof);

        
        $__internal_ae7d3759e78e3bca37110b2bea06541f0c9092181e612cf1effc526c6611e069->leave($__internal_ae7d3759e78e3bca37110b2bea06541f0c9092181e612cf1effc526c6611e069_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82c43ee7609c8e94200eea1f17dcd5edcbeeebec27ac10b86b54ac41654b538e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c43ee7609c8e94200eea1f17dcd5edcbeeebec27ac10b86b54ac41654b538e->enter($__internal_82c43ee7609c8e94200eea1f17dcd5edcbeeebec27ac10b86b54ac41654b538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_798f0c5825dc7be99790c60a287ec045f710d7f114008ba1852e409098de4e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798f0c5825dc7be99790c60a287ec045f710d7f114008ba1852e409098de4e8d->enter($__internal_798f0c5825dc7be99790c60a287ec045f710d7f114008ba1852e409098de4e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_798f0c5825dc7be99790c60a287ec045f710d7f114008ba1852e409098de4e8d->leave($__internal_798f0c5825dc7be99790c60a287ec045f710d7f114008ba1852e409098de4e8d_prof);

        
        $__internal_82c43ee7609c8e94200eea1f17dcd5edcbeeebec27ac10b86b54ac41654b538e->leave($__internal_82c43ee7609c8e94200eea1f17dcd5edcbeeebec27ac10b86b54ac41654b538e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb249f512272254e8873093ffcac6a5f585065ed71e1408ac7cc944440768c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb249f512272254e8873093ffcac6a5f585065ed71e1408ac7cc944440768c7->enter($__internal_ceb249f512272254e8873093ffcac6a5f585065ed71e1408ac7cc944440768c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4a8003451edc7178f9b00f813b6d4d78313c3400a8df1f90f8be5a903a8a5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a8003451edc7178f9b00f813b6d4d78313c3400a8df1f90f8be5a903a8a5aa->enter($__internal_f4a8003451edc7178f9b00f813b6d4d78313c3400a8df1f90f8be5a903a8a5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4a8003451edc7178f9b00f813b6d4d78313c3400a8df1f90f8be5a903a8a5aa->leave($__internal_f4a8003451edc7178f9b00f813b6d4d78313c3400a8df1f90f8be5a903a8a5aa_prof);

        
        $__internal_ceb249f512272254e8873093ffcac6a5f585065ed71e1408ac7cc944440768c7->leave($__internal_ceb249f512272254e8873093ffcac6a5f585065ed71e1408ac7cc944440768c7_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d24e4b503917248248b3be97be6dc86afd5a00fa5bed531ccc2c6573b06f8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d24e4b503917248248b3be97be6dc86afd5a00fa5bed531ccc2c6573b06f8be->enter($__internal_0d24e4b503917248248b3be97be6dc86afd5a00fa5bed531ccc2c6573b06f8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f0de1e7be47905bec6173a43b74fd68d8bc089916d591f84ea51394b395b82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0de1e7be47905bec6173a43b74fd68d8bc089916d591f84ea51394b395b82d->enter($__internal_8f0de1e7be47905bec6173a43b74fd68d8bc089916d591f84ea51394b395b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_8f0de1e7be47905bec6173a43b74fd68d8bc089916d591f84ea51394b395b82d->leave($__internal_8f0de1e7be47905bec6173a43b74fd68d8bc089916d591f84ea51394b395b82d_prof);

        
        $__internal_0d24e4b503917248248b3be97be6dc86afd5a00fa5bed531ccc2c6573b06f8be->leave($__internal_0d24e4b503917248248b3be97be6dc86afd5a00fa5bed531ccc2c6573b06f8be_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/base.html.twig");
    }
}
