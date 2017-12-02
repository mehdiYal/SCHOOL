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
        $__internal_dd1fcc939dbe81a62501fb08d6585111bdacbd10f68f293e17673078c41d8cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1fcc939dbe81a62501fb08d6585111bdacbd10f68f293e17673078c41d8cd0->enter($__internal_dd1fcc939dbe81a62501fb08d6585111bdacbd10f68f293e17673078c41d8cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d7334f7dbd36901e4a780f030db117d2e9e25945ba3c06d2e21d4135c1f8846d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7334f7dbd36901e4a780f030db117d2e9e25945ba3c06d2e21d4135c1f8846d->enter($__internal_d7334f7dbd36901e4a780f030db117d2e9e25945ba3c06d2e21d4135c1f8846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_dd1fcc939dbe81a62501fb08d6585111bdacbd10f68f293e17673078c41d8cd0->leave($__internal_dd1fcc939dbe81a62501fb08d6585111bdacbd10f68f293e17673078c41d8cd0_prof);

        
        $__internal_d7334f7dbd36901e4a780f030db117d2e9e25945ba3c06d2e21d4135c1f8846d->leave($__internal_d7334f7dbd36901e4a780f030db117d2e9e25945ba3c06d2e21d4135c1f8846d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e0c46d06f98c77d20d392c40f92b3c6a02c7ac9f9467640b5f1bc3ca0f459731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c46d06f98c77d20d392c40f92b3c6a02c7ac9f9467640b5f1bc3ca0f459731->enter($__internal_e0c46d06f98c77d20d392c40f92b3c6a02c7ac9f9467640b5f1bc3ca0f459731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa097a2f6e8951f7e35f84cc3a682bfa0eda896e762b699e854afa407db4ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa097a2f6e8951f7e35f84cc3a682bfa0eda896e762b699e854afa407db4ffa2->enter($__internal_fa097a2f6e8951f7e35f84cc3a682bfa0eda896e762b699e854afa407db4ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fa097a2f6e8951f7e35f84cc3a682bfa0eda896e762b699e854afa407db4ffa2->leave($__internal_fa097a2f6e8951f7e35f84cc3a682bfa0eda896e762b699e854afa407db4ffa2_prof);

        
        $__internal_e0c46d06f98c77d20d392c40f92b3c6a02c7ac9f9467640b5f1bc3ca0f459731->leave($__internal_e0c46d06f98c77d20d392c40f92b3c6a02c7ac9f9467640b5f1bc3ca0f459731_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fd571810613e542c33d463b1bf3ab06c5e5ce32379d30a911ca79b7057b2179a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd571810613e542c33d463b1bf3ab06c5e5ce32379d30a911ca79b7057b2179a->enter($__internal_fd571810613e542c33d463b1bf3ab06c5e5ce32379d30a911ca79b7057b2179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_88d04f13711efa0241a1345627d2a8a9920400b3e36ab6c8223cc57440acb96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d04f13711efa0241a1345627d2a8a9920400b3e36ab6c8223cc57440acb96e->enter($__internal_88d04f13711efa0241a1345627d2a8a9920400b3e36ab6c8223cc57440acb96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_88d04f13711efa0241a1345627d2a8a9920400b3e36ab6c8223cc57440acb96e->leave($__internal_88d04f13711efa0241a1345627d2a8a9920400b3e36ab6c8223cc57440acb96e_prof);

        
        $__internal_fd571810613e542c33d463b1bf3ab06c5e5ce32379d30a911ca79b7057b2179a->leave($__internal_fd571810613e542c33d463b1bf3ab06c5e5ce32379d30a911ca79b7057b2179a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d12a651bfb465874026cc6a1c4edd02977539600f92edae47d5879bff5ec986c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12a651bfb465874026cc6a1c4edd02977539600f92edae47d5879bff5ec986c->enter($__internal_d12a651bfb465874026cc6a1c4edd02977539600f92edae47d5879bff5ec986c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_185974ff9519ab69d454cf6577585588da096fef684b0df3fb6c4357ccfcae8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185974ff9519ab69d454cf6577585588da096fef684b0df3fb6c4357ccfcae8d->enter($__internal_185974ff9519ab69d454cf6577585588da096fef684b0df3fb6c4357ccfcae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_185974ff9519ab69d454cf6577585588da096fef684b0df3fb6c4357ccfcae8d->leave($__internal_185974ff9519ab69d454cf6577585588da096fef684b0df3fb6c4357ccfcae8d_prof);

        
        $__internal_d12a651bfb465874026cc6a1c4edd02977539600f92edae47d5879bff5ec986c->leave($__internal_d12a651bfb465874026cc6a1c4edd02977539600f92edae47d5879bff5ec986c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c40ea3d964196c2a9489854d217acdbee684868cabf83fc118e95957344f6e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40ea3d964196c2a9489854d217acdbee684868cabf83fc118e95957344f6e58->enter($__internal_c40ea3d964196c2a9489854d217acdbee684868cabf83fc118e95957344f6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4b30e9912b8b022c4e207ce51406a84b86330a2afb45042f764a141d07ce2cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b30e9912b8b022c4e207ce51406a84b86330a2afb45042f764a141d07ce2cf7->enter($__internal_4b30e9912b8b022c4e207ce51406a84b86330a2afb45042f764a141d07ce2cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_4b30e9912b8b022c4e207ce51406a84b86330a2afb45042f764a141d07ce2cf7->leave($__internal_4b30e9912b8b022c4e207ce51406a84b86330a2afb45042f764a141d07ce2cf7_prof);

        
        $__internal_c40ea3d964196c2a9489854d217acdbee684868cabf83fc118e95957344f6e58->leave($__internal_c40ea3d964196c2a9489854d217acdbee684868cabf83fc118e95957344f6e58_prof);

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
", "form_table_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
