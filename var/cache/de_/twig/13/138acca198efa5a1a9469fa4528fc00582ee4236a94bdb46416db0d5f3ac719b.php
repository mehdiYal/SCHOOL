<?php

/* form_table_layout.html.twig */
class __TwigTemplate_6dcd589ce34eb10463e07fbfda56f29c2a4629034a7afd0b1541c8a25310a411 extends Twig_Template
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
        $__internal_d88c09cb6d1de801b5d494f6e159ec05f28f517c39e575f0e5e3dc58d3a5b15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88c09cb6d1de801b5d494f6e159ec05f28f517c39e575f0e5e3dc58d3a5b15d->enter($__internal_d88c09cb6d1de801b5d494f6e159ec05f28f517c39e575f0e5e3dc58d3a5b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_75c4ad84489da2b7c45cd6738822481580cd90d3f15ec3956257e1b44303e919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c4ad84489da2b7c45cd6738822481580cd90d3f15ec3956257e1b44303e919->enter($__internal_75c4ad84489da2b7c45cd6738822481580cd90d3f15ec3956257e1b44303e919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_d88c09cb6d1de801b5d494f6e159ec05f28f517c39e575f0e5e3dc58d3a5b15d->leave($__internal_d88c09cb6d1de801b5d494f6e159ec05f28f517c39e575f0e5e3dc58d3a5b15d_prof);

        
        $__internal_75c4ad84489da2b7c45cd6738822481580cd90d3f15ec3956257e1b44303e919->leave($__internal_75c4ad84489da2b7c45cd6738822481580cd90d3f15ec3956257e1b44303e919_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_29c4a615d7f7f8efd45eff228041abf9bc7e4de3d191d8704db9c4d35754211b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c4a615d7f7f8efd45eff228041abf9bc7e4de3d191d8704db9c4d35754211b->enter($__internal_29c4a615d7f7f8efd45eff228041abf9bc7e4de3d191d8704db9c4d35754211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ad68bf3fbecded65cb415257cac5a3a009de9ba8e12d70b7d1c0417e0dc0fe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad68bf3fbecded65cb415257cac5a3a009de9ba8e12d70b7d1c0417e0dc0fe9a->enter($__internal_ad68bf3fbecded65cb415257cac5a3a009de9ba8e12d70b7d1c0417e0dc0fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ad68bf3fbecded65cb415257cac5a3a009de9ba8e12d70b7d1c0417e0dc0fe9a->leave($__internal_ad68bf3fbecded65cb415257cac5a3a009de9ba8e12d70b7d1c0417e0dc0fe9a_prof);

        
        $__internal_29c4a615d7f7f8efd45eff228041abf9bc7e4de3d191d8704db9c4d35754211b->leave($__internal_29c4a615d7f7f8efd45eff228041abf9bc7e4de3d191d8704db9c4d35754211b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0aeb8736a8f7e8fccc7a102bf4b21a3142ccaf9b6ccd0d2075c77453949675dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aeb8736a8f7e8fccc7a102bf4b21a3142ccaf9b6ccd0d2075c77453949675dd->enter($__internal_0aeb8736a8f7e8fccc7a102bf4b21a3142ccaf9b6ccd0d2075c77453949675dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9d3250b8d9b865d6e97c19eda513ebf4c59ba59fbd4929e825af93fd7eee3567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3250b8d9b865d6e97c19eda513ebf4c59ba59fbd4929e825af93fd7eee3567->enter($__internal_9d3250b8d9b865d6e97c19eda513ebf4c59ba59fbd4929e825af93fd7eee3567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9d3250b8d9b865d6e97c19eda513ebf4c59ba59fbd4929e825af93fd7eee3567->leave($__internal_9d3250b8d9b865d6e97c19eda513ebf4c59ba59fbd4929e825af93fd7eee3567_prof);

        
        $__internal_0aeb8736a8f7e8fccc7a102bf4b21a3142ccaf9b6ccd0d2075c77453949675dd->leave($__internal_0aeb8736a8f7e8fccc7a102bf4b21a3142ccaf9b6ccd0d2075c77453949675dd_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c7a9a9f1794814519f9572b6d9888adbd5b2c5c88a451fc62aa617cfe45cc0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a9a9f1794814519f9572b6d9888adbd5b2c5c88a451fc62aa617cfe45cc0ce->enter($__internal_c7a9a9f1794814519f9572b6d9888adbd5b2c5c88a451fc62aa617cfe45cc0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3bd35d00e3b5cecf34648a175949a8e6d503b2e8435045915d680981364bbc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd35d00e3b5cecf34648a175949a8e6d503b2e8435045915d680981364bbc51->enter($__internal_3bd35d00e3b5cecf34648a175949a8e6d503b2e8435045915d680981364bbc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_3bd35d00e3b5cecf34648a175949a8e6d503b2e8435045915d680981364bbc51->leave($__internal_3bd35d00e3b5cecf34648a175949a8e6d503b2e8435045915d680981364bbc51_prof);

        
        $__internal_c7a9a9f1794814519f9572b6d9888adbd5b2c5c88a451fc62aa617cfe45cc0ce->leave($__internal_c7a9a9f1794814519f9572b6d9888adbd5b2c5c88a451fc62aa617cfe45cc0ce_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a89e23eb766b8b7990184e09c1e506036c70bed4f20bc31a2f10e59ebd7ffb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89e23eb766b8b7990184e09c1e506036c70bed4f20bc31a2f10e59ebd7ffb1e->enter($__internal_a89e23eb766b8b7990184e09c1e506036c70bed4f20bc31a2f10e59ebd7ffb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8ae2cb1be8cccab4d0f63ebbd901a347775e566b29055063998c6dc05cbef57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae2cb1be8cccab4d0f63ebbd901a347775e566b29055063998c6dc05cbef57d->enter($__internal_8ae2cb1be8cccab4d0f63ebbd901a347775e566b29055063998c6dc05cbef57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_8ae2cb1be8cccab4d0f63ebbd901a347775e566b29055063998c6dc05cbef57d->leave($__internal_8ae2cb1be8cccab4d0f63ebbd901a347775e566b29055063998c6dc05cbef57d_prof);

        
        $__internal_a89e23eb766b8b7990184e09c1e506036c70bed4f20bc31a2f10e59ebd7ffb1e->leave($__internal_a89e23eb766b8b7990184e09c1e506036c70bed4f20bc31a2f10e59ebd7ffb1e_prof);

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
", "form_table_layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
