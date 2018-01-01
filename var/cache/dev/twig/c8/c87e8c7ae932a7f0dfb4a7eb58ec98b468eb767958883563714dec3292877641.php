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
        $__internal_3d0a460b5a8fdd06a43ea401b960718cf73ba316d43aadb9a331feb36f614beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0a460b5a8fdd06a43ea401b960718cf73ba316d43aadb9a331feb36f614beb->enter($__internal_3d0a460b5a8fdd06a43ea401b960718cf73ba316d43aadb9a331feb36f614beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_70242063b6ea7682739b2ec24ce0bac6a7165c2bfba5413abb651739322110dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70242063b6ea7682739b2ec24ce0bac6a7165c2bfba5413abb651739322110dc->enter($__internal_70242063b6ea7682739b2ec24ce0bac6a7165c2bfba5413abb651739322110dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3d0a460b5a8fdd06a43ea401b960718cf73ba316d43aadb9a331feb36f614beb->leave($__internal_3d0a460b5a8fdd06a43ea401b960718cf73ba316d43aadb9a331feb36f614beb_prof);

        
        $__internal_70242063b6ea7682739b2ec24ce0bac6a7165c2bfba5413abb651739322110dc->leave($__internal_70242063b6ea7682739b2ec24ce0bac6a7165c2bfba5413abb651739322110dc_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_043670eaa14019c878ea47bd64d54b49d57b4c40925b948b84e9529a977d24c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043670eaa14019c878ea47bd64d54b49d57b4c40925b948b84e9529a977d24c6->enter($__internal_043670eaa14019c878ea47bd64d54b49d57b4c40925b948b84e9529a977d24c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4389720fe61696d4006db13ab4798f95b32608e87fa8da68f6b05df5a5d425d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4389720fe61696d4006db13ab4798f95b32608e87fa8da68f6b05df5a5d425d8->enter($__internal_4389720fe61696d4006db13ab4798f95b32608e87fa8da68f6b05df5a5d425d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4389720fe61696d4006db13ab4798f95b32608e87fa8da68f6b05df5a5d425d8->leave($__internal_4389720fe61696d4006db13ab4798f95b32608e87fa8da68f6b05df5a5d425d8_prof);

        
        $__internal_043670eaa14019c878ea47bd64d54b49d57b4c40925b948b84e9529a977d24c6->leave($__internal_043670eaa14019c878ea47bd64d54b49d57b4c40925b948b84e9529a977d24c6_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dd04d120bba6eb92f9da999b63e2ccb142c8071ee4bda793134957bc7419936a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd04d120bba6eb92f9da999b63e2ccb142c8071ee4bda793134957bc7419936a->enter($__internal_dd04d120bba6eb92f9da999b63e2ccb142c8071ee4bda793134957bc7419936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9e030803d3a9af392c2a23063c97994e903ae4676d095b21ec4fed97202d208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e030803d3a9af392c2a23063c97994e903ae4676d095b21ec4fed97202d208c->enter($__internal_9e030803d3a9af392c2a23063c97994e903ae4676d095b21ec4fed97202d208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9e030803d3a9af392c2a23063c97994e903ae4676d095b21ec4fed97202d208c->leave($__internal_9e030803d3a9af392c2a23063c97994e903ae4676d095b21ec4fed97202d208c_prof);

        
        $__internal_dd04d120bba6eb92f9da999b63e2ccb142c8071ee4bda793134957bc7419936a->leave($__internal_dd04d120bba6eb92f9da999b63e2ccb142c8071ee4bda793134957bc7419936a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c27b676b479371c1a72c0b095ffab42f426c0b5a91384d4f1113cca0489a26a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27b676b479371c1a72c0b095ffab42f426c0b5a91384d4f1113cca0489a26a0->enter($__internal_c27b676b479371c1a72c0b095ffab42f426c0b5a91384d4f1113cca0489a26a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_db1f86fef912c995f4feaac9c774f95ae2de920016827fbc0dfb1c6926bf0a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1f86fef912c995f4feaac9c774f95ae2de920016827fbc0dfb1c6926bf0a83->enter($__internal_db1f86fef912c995f4feaac9c774f95ae2de920016827fbc0dfb1c6926bf0a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_db1f86fef912c995f4feaac9c774f95ae2de920016827fbc0dfb1c6926bf0a83->leave($__internal_db1f86fef912c995f4feaac9c774f95ae2de920016827fbc0dfb1c6926bf0a83_prof);

        
        $__internal_c27b676b479371c1a72c0b095ffab42f426c0b5a91384d4f1113cca0489a26a0->leave($__internal_c27b676b479371c1a72c0b095ffab42f426c0b5a91384d4f1113cca0489a26a0_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1f55139d7697b17c81ce56b76d0c3a9e90cb5b4f5774ed043606aada01eee805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f55139d7697b17c81ce56b76d0c3a9e90cb5b4f5774ed043606aada01eee805->enter($__internal_1f55139d7697b17c81ce56b76d0c3a9e90cb5b4f5774ed043606aada01eee805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d4c5db1c4191bf6e2ba1f2d4b95fc7f1d868907d6d8e2b11581945d5b8878b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c5db1c4191bf6e2ba1f2d4b95fc7f1d868907d6d8e2b11581945d5b8878b09->enter($__internal_d4c5db1c4191bf6e2ba1f2d4b95fc7f1d868907d6d8e2b11581945d5b8878b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
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
        
        $__internal_d4c5db1c4191bf6e2ba1f2d4b95fc7f1d868907d6d8e2b11581945d5b8878b09->leave($__internal_d4c5db1c4191bf6e2ba1f2d4b95fc7f1d868907d6d8e2b11581945d5b8878b09_prof);

        
        $__internal_1f55139d7697b17c81ce56b76d0c3a9e90cb5b4f5774ed043606aada01eee805->leave($__internal_1f55139d7697b17c81ce56b76d0c3a9e90cb5b4f5774ed043606aada01eee805_prof);

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
        {%- if form is rootform and errors|length > 0 -%}
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
