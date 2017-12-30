<?php

/* :default:dashSuperAdmin.html.twig */
class __TwigTemplate_98b7e5fb393c54fa23b11c3f003f48afc36bce013c5f5b8574a97d8e314a841d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSuper.html.twig", ":default:dashSuperAdmin.html.twig", 1);
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
        $__internal_dbd8561c1c4c2a81c1b3b5a6ed1eba7e1169d37ca4a864807873d507b4e0ab82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd8561c1c4c2a81c1b3b5a6ed1eba7e1169d37ca4a864807873d507b4e0ab82->enter($__internal_dbd8561c1c4c2a81c1b3b5a6ed1eba7e1169d37ca4a864807873d507b4e0ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $__internal_86b707877d374ea59c4bbd06417a384f37deea6a4e0115220bc5c173936131c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b707877d374ea59c4bbd06417a384f37deea6a4e0115220bc5c173936131c6->enter($__internal_86b707877d374ea59c4bbd06417a384f37deea6a4e0115220bc5c173936131c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashSuperAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd8561c1c4c2a81c1b3b5a6ed1eba7e1169d37ca4a864807873d507b4e0ab82->leave($__internal_dbd8561c1c4c2a81c1b3b5a6ed1eba7e1169d37ca4a864807873d507b4e0ab82_prof);

        
        $__internal_86b707877d374ea59c4bbd06417a384f37deea6a4e0115220bc5c173936131c6->leave($__internal_86b707877d374ea59c4bbd06417a384f37deea6a4e0115220bc5c173936131c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fdb97aceebf140666b9ab02068eb2a1658521059c00778a5862b47e6638bddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdb97aceebf140666b9ab02068eb2a1658521059c00778a5862b47e6638bddc->enter($__internal_9fdb97aceebf140666b9ab02068eb2a1658521059c00778a5862b47e6638bddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40ee03bb2afc63241a33f5b6781783b843b051bb14d67e4fb53cac905277649f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ee03bb2afc63241a33f5b6781783b843b051bb14d67e4fb53cac905277649f->enter($__internal_40ee03bb2afc63241a33f5b6781783b843b051bb14d67e4fb53cac905277649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_40ee03bb2afc63241a33f5b6781783b843b051bb14d67e4fb53cac905277649f->leave($__internal_40ee03bb2afc63241a33f5b6781783b843b051bb14d67e4fb53cac905277649f_prof);

        
        $__internal_9fdb97aceebf140666b9ab02068eb2a1658521059c00778a5862b47e6638bddc->leave($__internal_9fdb97aceebf140666b9ab02068eb2a1658521059c00778a5862b47e6638bddc_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashSuperAdmin.html.twig";
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
    
{% endblock %}", ":default:dashSuperAdmin.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/default/dashSuperAdmin.html.twig");
    }
}
