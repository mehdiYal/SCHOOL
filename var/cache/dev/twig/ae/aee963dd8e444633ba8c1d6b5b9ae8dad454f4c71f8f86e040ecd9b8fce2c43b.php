<?php

/* form_table_layout.html.twig */
class __TwigTemplate_110b7a5da56d86bb7de7f0ad1947d119997dd47e0fb2035d00ee6b09cf8b4869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2941ecd54f4dc3ee1ebc7eb86182d97ae0add171917db5c4666d3c810c71d2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2941ecd54f4dc3ee1ebc7eb86182d97ae0add171917db5c4666d3c810c71d2b4->enter($__internal_2941ecd54f4dc3ee1ebc7eb86182d97ae0add171917db5c4666d3c810c71d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_6e40397cb313515dbb9d1922dcf3676c62c3039c085cedabde675d307c5e04a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e40397cb313515dbb9d1922dcf3676c62c3039c085cedabde675d307c5e04a5->enter($__internal_6e40397cb313515dbb9d1922dcf3676c62c3039c085cedabde675d307c5e04a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_2941ecd54f4dc3ee1ebc7eb86182d97ae0add171917db5c4666d3c810c71d2b4->leave($__internal_2941ecd54f4dc3ee1ebc7eb86182d97ae0add171917db5c4666d3c810c71d2b4_prof);

        
        $__internal_6e40397cb313515dbb9d1922dcf3676c62c3039c085cedabde675d307c5e04a5->leave($__internal_6e40397cb313515dbb9d1922dcf3676c62c3039c085cedabde675d307c5e04a5_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_10e2971f2da1bfe0483a14ab7e4946f7bf03191bc2dc1c7ecb3286eb46768914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e2971f2da1bfe0483a14ab7e4946f7bf03191bc2dc1c7ecb3286eb46768914->enter($__internal_10e2971f2da1bfe0483a14ab7e4946f7bf03191bc2dc1c7ecb3286eb46768914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b5743bf0cb75d77ddccd7fc64a28b6cd8b51d630c1c4f1608b279985fc679164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5743bf0cb75d77ddccd7fc64a28b6cd8b51d630c1c4f1608b279985fc679164->enter($__internal_b5743bf0cb75d77ddccd7fc64a28b6cd8b51d630c1c4f1608b279985fc679164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_b5743bf0cb75d77ddccd7fc64a28b6cd8b51d630c1c4f1608b279985fc679164->leave($__internal_b5743bf0cb75d77ddccd7fc64a28b6cd8b51d630c1c4f1608b279985fc679164_prof);

        
        $__internal_10e2971f2da1bfe0483a14ab7e4946f7bf03191bc2dc1c7ecb3286eb46768914->leave($__internal_10e2971f2da1bfe0483a14ab7e4946f7bf03191bc2dc1c7ecb3286eb46768914_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d0685d8bed8f20549ef20c0760f61ddd65974635a15f3dfefba942cb7cbdb1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0685d8bed8f20549ef20c0760f61ddd65974635a15f3dfefba942cb7cbdb1ab->enter($__internal_d0685d8bed8f20549ef20c0760f61ddd65974635a15f3dfefba942cb7cbdb1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d03364d76398b9448e8018bb47256e52ebce249e2d22743bb965fc715386b85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03364d76398b9448e8018bb47256e52ebce249e2d22743bb965fc715386b85b->enter($__internal_d03364d76398b9448e8018bb47256e52ebce249e2d22743bb965fc715386b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_d03364d76398b9448e8018bb47256e52ebce249e2d22743bb965fc715386b85b->leave($__internal_d03364d76398b9448e8018bb47256e52ebce249e2d22743bb965fc715386b85b_prof);

        
        $__internal_d0685d8bed8f20549ef20c0760f61ddd65974635a15f3dfefba942cb7cbdb1ab->leave($__internal_d0685d8bed8f20549ef20c0760f61ddd65974635a15f3dfefba942cb7cbdb1ab_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_07783cc6ca700cbfcc923d4803d8e26609ad2646c1d503dd284d62fe9acfce34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07783cc6ca700cbfcc923d4803d8e26609ad2646c1d503dd284d62fe9acfce34->enter($__internal_07783cc6ca700cbfcc923d4803d8e26609ad2646c1d503dd284d62fe9acfce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7ffd84b8715ee88126550687e2b9db9b0df913fd601a709f1ca5f80a5f00625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffd84b8715ee88126550687e2b9db9b0df913fd601a709f1ca5f80a5f00625c->enter($__internal_7ffd84b8715ee88126550687e2b9db9b0df913fd601a709f1ca5f80a5f00625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7ffd84b8715ee88126550687e2b9db9b0df913fd601a709f1ca5f80a5f00625c->leave($__internal_7ffd84b8715ee88126550687e2b9db9b0df913fd601a709f1ca5f80a5f00625c_prof);

        
        $__internal_07783cc6ca700cbfcc923d4803d8e26609ad2646c1d503dd284d62fe9acfce34->leave($__internal_07783cc6ca700cbfcc923d4803d8e26609ad2646c1d503dd284d62fe9acfce34_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fa55e9fe7661c1e73ef5a736b75da3e6cb084659814b63b34ebed69d38232932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa55e9fe7661c1e73ef5a736b75da3e6cb084659814b63b34ebed69d38232932->enter($__internal_fa55e9fe7661c1e73ef5a736b75da3e6cb084659814b63b34ebed69d38232932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7cef94beb827a27e34e960824b54bebe8c091a16f441be027800da204f09c3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cef94beb827a27e34e960824b54bebe8c091a16f441be027800da204f09c3a9->enter($__internal_7cef94beb827a27e34e960824b54bebe8c091a16f441be027800da204f09c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_7cef94beb827a27e34e960824b54bebe8c091a16f441be027800da204f09c3a9->leave($__internal_7cef94beb827a27e34e960824b54bebe8c091a16f441be027800da204f09c3a9_prof);

        
        $__internal_fa55e9fe7661c1e73ef5a736b75da3e6cb084659814b63b34ebed69d38232932->leave($__internal_fa55e9fe7661c1e73ef5a736b75da3e6cb084659814b63b34ebed69d38232932_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
