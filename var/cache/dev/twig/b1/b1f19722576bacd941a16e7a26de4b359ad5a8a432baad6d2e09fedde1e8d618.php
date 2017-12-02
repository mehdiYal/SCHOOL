<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_d47554d9cfb1a63a05c3452f24cfc4b3bad2415ee4649f73989ec82d638bfdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47554d9cfb1a63a05c3452f24cfc4b3bad2415ee4649f73989ec82d638bfdd5->enter($__internal_d47554d9cfb1a63a05c3452f24cfc4b3bad2415ee4649f73989ec82d638bfdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5ec189e1c6eab7513616a29c8093d326499d9b505f87c439bf05c3d1abf053c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec189e1c6eab7513616a29c8093d326499d9b505f87c439bf05c3d1abf053c5->enter($__internal_5ec189e1c6eab7513616a29c8093d326499d9b505f87c439bf05c3d1abf053c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d47554d9cfb1a63a05c3452f24cfc4b3bad2415ee4649f73989ec82d638bfdd5->leave($__internal_d47554d9cfb1a63a05c3452f24cfc4b3bad2415ee4649f73989ec82d638bfdd5_prof);

        
        $__internal_5ec189e1c6eab7513616a29c8093d326499d9b505f87c439bf05c3d1abf053c5->leave($__internal_5ec189e1c6eab7513616a29c8093d326499d9b505f87c439bf05c3d1abf053c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fca0eb5ededbad38e5b3135f483006782cf0fdcebd5709c2f01ddcbebddf70a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca0eb5ededbad38e5b3135f483006782cf0fdcebd5709c2f01ddcbebddf70a8->enter($__internal_fca0eb5ededbad38e5b3135f483006782cf0fdcebd5709c2f01ddcbebddf70a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_624e35c7fd73ad5e416c6716060efe53ecf6d52dea3beb4021bb03f3667da472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624e35c7fd73ad5e416c6716060efe53ecf6d52dea3beb4021bb03f3667da472->enter($__internal_624e35c7fd73ad5e416c6716060efe53ecf6d52dea3beb4021bb03f3667da472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_624e35c7fd73ad5e416c6716060efe53ecf6d52dea3beb4021bb03f3667da472->leave($__internal_624e35c7fd73ad5e416c6716060efe53ecf6d52dea3beb4021bb03f3667da472_prof);

        
        $__internal_fca0eb5ededbad38e5b3135f483006782cf0fdcebd5709c2f01ddcbebddf70a8->leave($__internal_fca0eb5ededbad38e5b3135f483006782cf0fdcebd5709c2f01ddcbebddf70a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8298117c9341a33b1d17c5f9f4d4af8fb89c2e9c3085b096bd018cc75931d017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8298117c9341a33b1d17c5f9f4d4af8fb89c2e9c3085b096bd018cc75931d017->enter($__internal_8298117c9341a33b1d17c5f9f4d4af8fb89c2e9c3085b096bd018cc75931d017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7bca301df0165f8c8210eff01ad46d3303ea09d5a61f2deeb908da45bc4a6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bca301df0165f8c8210eff01ad46d3303ea09d5a61f2deeb908da45bc4a6b0->enter($__internal_b7bca301df0165f8c8210eff01ad46d3303ea09d5a61f2deeb908da45bc4a6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7bca301df0165f8c8210eff01ad46d3303ea09d5a61f2deeb908da45bc4a6b0->leave($__internal_b7bca301df0165f8c8210eff01ad46d3303ea09d5a61f2deeb908da45bc4a6b0_prof);

        
        $__internal_8298117c9341a33b1d17c5f9f4d4af8fb89c2e9c3085b096bd018cc75931d017->leave($__internal_8298117c9341a33b1d17c5f9f4d4af8fb89c2e9c3085b096bd018cc75931d017_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee2366724a2da07983cb6c0994a9cd0aac10b287fcc04683fb66aaaeb1a539d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2366724a2da07983cb6c0994a9cd0aac10b287fcc04683fb66aaaeb1a539d0->enter($__internal_ee2366724a2da07983cb6c0994a9cd0aac10b287fcc04683fb66aaaeb1a539d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2678eb5fefe919c926d97973cd9edb8a657f0625bc098b8a0b82635b5e08ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2678eb5fefe919c926d97973cd9edb8a657f0625bc098b8a0b82635b5e08ff8->enter($__internal_c2678eb5fefe919c926d97973cd9edb8a657f0625bc098b8a0b82635b5e08ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2678eb5fefe919c926d97973cd9edb8a657f0625bc098b8a0b82635b5e08ff8->leave($__internal_c2678eb5fefe919c926d97973cd9edb8a657f0625bc098b8a0b82635b5e08ff8_prof);

        
        $__internal_ee2366724a2da07983cb6c0994a9cd0aac10b287fcc04683fb66aaaeb1a539d0->leave($__internal_ee2366724a2da07983cb6c0994a9cd0aac10b287fcc04683fb66aaaeb1a539d0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb9ddcdca9fac10bf381736f9d508d73c58f1af4f818b9e52dcaf92cb031e63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9ddcdca9fac10bf381736f9d508d73c58f1af4f818b9e52dcaf92cb031e63d->enter($__internal_cb9ddcdca9fac10bf381736f9d508d73c58f1af4f818b9e52dcaf92cb031e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0149c45b4f804daf07d249df9c87876caa60ad14e7cd92fd81cf8b0824bfb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0149c45b4f804daf07d249df9c87876caa60ad14e7cd92fd81cf8b0824bfb45->enter($__internal_f0149c45b4f804daf07d249df9c87876caa60ad14e7cd92fd81cf8b0824bfb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_f0149c45b4f804daf07d249df9c87876caa60ad14e7cd92fd81cf8b0824bfb45->leave($__internal_f0149c45b4f804daf07d249df9c87876caa60ad14e7cd92fd81cf8b0824bfb45_prof);

        
        $__internal_cb9ddcdca9fac10bf381736f9d508d73c58f1af4f818b9e52dcaf92cb031e63d->leave($__internal_cb9ddcdca9fac10bf381736f9d508d73c58f1af4f818b9e52dcaf92cb031e63d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/base.html.twig");
    }
}
