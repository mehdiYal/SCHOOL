<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_06e1600ecf51c66b54c73a140cd4240249fa0211bc6c66755f6a6b07e5fa3748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48835e36bedfaaa3cc0185b2b0c416fbefa3f35c8e54261714bfb952ed992246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48835e36bedfaaa3cc0185b2b0c416fbefa3f35c8e54261714bfb952ed992246->enter($__internal_48835e36bedfaaa3cc0185b2b0c416fbefa3f35c8e54261714bfb952ed992246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d175ea0667de0ad26e055bc1aa114054170bfa1a6ec33650026baf6bc7e218fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d175ea0667de0ad26e055bc1aa114054170bfa1a6ec33650026baf6bc7e218fd->enter($__internal_d175ea0667de0ad26e055bc1aa114054170bfa1a6ec33650026baf6bc7e218fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48835e36bedfaaa3cc0185b2b0c416fbefa3f35c8e54261714bfb952ed992246->leave($__internal_48835e36bedfaaa3cc0185b2b0c416fbefa3f35c8e54261714bfb952ed992246_prof);

        
        $__internal_d175ea0667de0ad26e055bc1aa114054170bfa1a6ec33650026baf6bc7e218fd->leave($__internal_d175ea0667de0ad26e055bc1aa114054170bfa1a6ec33650026baf6bc7e218fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e5ec0e1c1ca89881cdffed0360922624bb8710882638cd82fe6c56e31850035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5ec0e1c1ca89881cdffed0360922624bb8710882638cd82fe6c56e31850035->enter($__internal_6e5ec0e1c1ca89881cdffed0360922624bb8710882638cd82fe6c56e31850035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82ee3e3d63ed3d64749e5656e204bdce8a1a60a95d70f3fc27eafab4abd10eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ee3e3d63ed3d64749e5656e204bdce8a1a60a95d70f3fc27eafab4abd10eb6->enter($__internal_82ee3e3d63ed3d64749e5656e204bdce8a1a60a95d70f3fc27eafab4abd10eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_82ee3e3d63ed3d64749e5656e204bdce8a1a60a95d70f3fc27eafab4abd10eb6->leave($__internal_82ee3e3d63ed3d64749e5656e204bdce8a1a60a95d70f3fc27eafab4abd10eb6_prof);

        
        $__internal_6e5ec0e1c1ca89881cdffed0360922624bb8710882638cd82fe6c56e31850035->leave($__internal_6e5ec0e1c1ca89881cdffed0360922624bb8710882638cd82fe6c56e31850035_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
