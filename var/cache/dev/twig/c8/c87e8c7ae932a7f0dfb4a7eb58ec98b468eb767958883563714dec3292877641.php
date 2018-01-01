<?php

/* form_table_layout.html.twig */
class __TwigTemplate_652ab1d1eaf74250d4d10ce9c581d3221bc0096cbdaf0fc05109c2d34a33b01f extends Twig_Template
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
        $__internal_bdc2f96a70f5bdf8ef2196511a42f6997c3dac33c47a66e929b6c62e670fc963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc2f96a70f5bdf8ef2196511a42f6997c3dac33c47a66e929b6c62e670fc963->enter($__internal_bdc2f96a70f5bdf8ef2196511a42f6997c3dac33c47a66e929b6c62e670fc963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_5af90d446db891941626aa8e3f38967eb312acdbcc1e7be5c92824d6862abda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af90d446db891941626aa8e3f38967eb312acdbcc1e7be5c92824d6862abda9->enter($__internal_5af90d446db891941626aa8e3f38967eb312acdbcc1e7be5c92824d6862abda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_bdc2f96a70f5bdf8ef2196511a42f6997c3dac33c47a66e929b6c62e670fc963->leave($__internal_bdc2f96a70f5bdf8ef2196511a42f6997c3dac33c47a66e929b6c62e670fc963_prof);

        
        $__internal_5af90d446db891941626aa8e3f38967eb312acdbcc1e7be5c92824d6862abda9->leave($__internal_5af90d446db891941626aa8e3f38967eb312acdbcc1e7be5c92824d6862abda9_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae690d01150f7eae3e23cadc33118fade4f2629b838645b758cd59dd3022c9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae690d01150f7eae3e23cadc33118fade4f2629b838645b758cd59dd3022c9bf->enter($__internal_ae690d01150f7eae3e23cadc33118fade4f2629b838645b758cd59dd3022c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1b832143913d5cc1f2ea34425f4242411b8c49026f3ecc5a747ad285d84a8237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b832143913d5cc1f2ea34425f4242411b8c49026f3ecc5a747ad285d84a8237->enter($__internal_1b832143913d5cc1f2ea34425f4242411b8c49026f3ecc5a747ad285d84a8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1b832143913d5cc1f2ea34425f4242411b8c49026f3ecc5a747ad285d84a8237->leave($__internal_1b832143913d5cc1f2ea34425f4242411b8c49026f3ecc5a747ad285d84a8237_prof);

        
        $__internal_ae690d01150f7eae3e23cadc33118fade4f2629b838645b758cd59dd3022c9bf->leave($__internal_ae690d01150f7eae3e23cadc33118fade4f2629b838645b758cd59dd3022c9bf_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4d1d6fd9c50e5ec72cd9708fb8922d2e6bd799766a6d754b90a4dc65fe85e9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1d6fd9c50e5ec72cd9708fb8922d2e6bd799766a6d754b90a4dc65fe85e9dd->enter($__internal_4d1d6fd9c50e5ec72cd9708fb8922d2e6bd799766a6d754b90a4dc65fe85e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6c73f939e879dcdc1ca49c21a5f1a684e562917c8a3791dba017575350b2d8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c73f939e879dcdc1ca49c21a5f1a684e562917c8a3791dba017575350b2d8a6->enter($__internal_6c73f939e879dcdc1ca49c21a5f1a684e562917c8a3791dba017575350b2d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_6c73f939e879dcdc1ca49c21a5f1a684e562917c8a3791dba017575350b2d8a6->leave($__internal_6c73f939e879dcdc1ca49c21a5f1a684e562917c8a3791dba017575350b2d8a6_prof);

        
        $__internal_4d1d6fd9c50e5ec72cd9708fb8922d2e6bd799766a6d754b90a4dc65fe85e9dd->leave($__internal_4d1d6fd9c50e5ec72cd9708fb8922d2e6bd799766a6d754b90a4dc65fe85e9dd_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d85a57d1ba23ad614889efe339efe8a0c423651548ffa675c01c0054e5858e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85a57d1ba23ad614889efe339efe8a0c423651548ffa675c01c0054e5858e24->enter($__internal_d85a57d1ba23ad614889efe339efe8a0c423651548ffa675c01c0054e5858e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_413ce4b4bb731b96d25496592d14192c41a8ed4d5c770503586ea71e7aef301f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413ce4b4bb731b96d25496592d14192c41a8ed4d5c770503586ea71e7aef301f->enter($__internal_413ce4b4bb731b96d25496592d14192c41a8ed4d5c770503586ea71e7aef301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_413ce4b4bb731b96d25496592d14192c41a8ed4d5c770503586ea71e7aef301f->leave($__internal_413ce4b4bb731b96d25496592d14192c41a8ed4d5c770503586ea71e7aef301f_prof);

        
        $__internal_d85a57d1ba23ad614889efe339efe8a0c423651548ffa675c01c0054e5858e24->leave($__internal_d85a57d1ba23ad614889efe339efe8a0c423651548ffa675c01c0054e5858e24_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5cafdd0221ecbe908838fceb507fb6050e851c4f9559ffcd6e16ed0f1b0bd650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cafdd0221ecbe908838fceb507fb6050e851c4f9559ffcd6e16ed0f1b0bd650->enter($__internal_5cafdd0221ecbe908838fceb507fb6050e851c4f9559ffcd6e16ed0f1b0bd650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_2b6834b38f45a0ed897bcce2a0364e84438d2e39671ed074c6815939e60eb46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6834b38f45a0ed897bcce2a0364e84438d2e39671ed074c6815939e60eb46e->enter($__internal_2b6834b38f45a0ed897bcce2a0364e84438d2e39671ed074c6815939e60eb46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_2b6834b38f45a0ed897bcce2a0364e84438d2e39671ed074c6815939e60eb46e->leave($__internal_2b6834b38f45a0ed897bcce2a0364e84438d2e39671ed074c6815939e60eb46e_prof);

        
        $__internal_5cafdd0221ecbe908838fceb507fb6050e851c4f9559ffcd6e16ed0f1b0bd650->leave($__internal_5cafdd0221ecbe908838fceb507fb6050e851c4f9559ffcd6e16ed0f1b0bd650_prof);

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
