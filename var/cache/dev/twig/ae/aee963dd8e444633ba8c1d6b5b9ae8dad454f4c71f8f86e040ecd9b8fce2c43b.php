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
        $__internal_9e67ace83089db164e16200b1de157abf4c41d4bc020ba9a278ac8d162c9abfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e67ace83089db164e16200b1de157abf4c41d4bc020ba9a278ac8d162c9abfa->enter($__internal_9e67ace83089db164e16200b1de157abf4c41d4bc020ba9a278ac8d162c9abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a1e70bd64f0adbb9527494eb1d57e84e0504fb1dede4374b03d70399870e2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e70bd64f0adbb9527494eb1d57e84e0504fb1dede4374b03d70399870e2c81->enter($__internal_a1e70bd64f0adbb9527494eb1d57e84e0504fb1dede4374b03d70399870e2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9e67ace83089db164e16200b1de157abf4c41d4bc020ba9a278ac8d162c9abfa->leave($__internal_9e67ace83089db164e16200b1de157abf4c41d4bc020ba9a278ac8d162c9abfa_prof);

        
        $__internal_a1e70bd64f0adbb9527494eb1d57e84e0504fb1dede4374b03d70399870e2c81->leave($__internal_a1e70bd64f0adbb9527494eb1d57e84e0504fb1dede4374b03d70399870e2c81_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_63c02d91ec27bd820f14d7f15087172779afaabf719283707fc5c2b176b1297e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c02d91ec27bd820f14d7f15087172779afaabf719283707fc5c2b176b1297e->enter($__internal_63c02d91ec27bd820f14d7f15087172779afaabf719283707fc5c2b176b1297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f62a4f524625f2b7d260532cf5f63ca66ad5d84b376ea2e444ccb1a4c9277c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62a4f524625f2b7d260532cf5f63ca66ad5d84b376ea2e444ccb1a4c9277c5e->enter($__internal_f62a4f524625f2b7d260532cf5f63ca66ad5d84b376ea2e444ccb1a4c9277c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f62a4f524625f2b7d260532cf5f63ca66ad5d84b376ea2e444ccb1a4c9277c5e->leave($__internal_f62a4f524625f2b7d260532cf5f63ca66ad5d84b376ea2e444ccb1a4c9277c5e_prof);

        
        $__internal_63c02d91ec27bd820f14d7f15087172779afaabf719283707fc5c2b176b1297e->leave($__internal_63c02d91ec27bd820f14d7f15087172779afaabf719283707fc5c2b176b1297e_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_abf6f6b12eab0550ea4f26eb9db5f60c57807b42fade0c80f22e571035dea489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf6f6b12eab0550ea4f26eb9db5f60c57807b42fade0c80f22e571035dea489->enter($__internal_abf6f6b12eab0550ea4f26eb9db5f60c57807b42fade0c80f22e571035dea489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4db704685cf3bf42572f14d5f2980f3485fc4f4b4d03687dbb6dc252d323fde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db704685cf3bf42572f14d5f2980f3485fc4f4b4d03687dbb6dc252d323fde6->enter($__internal_4db704685cf3bf42572f14d5f2980f3485fc4f4b4d03687dbb6dc252d323fde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_4db704685cf3bf42572f14d5f2980f3485fc4f4b4d03687dbb6dc252d323fde6->leave($__internal_4db704685cf3bf42572f14d5f2980f3485fc4f4b4d03687dbb6dc252d323fde6_prof);

        
        $__internal_abf6f6b12eab0550ea4f26eb9db5f60c57807b42fade0c80f22e571035dea489->leave($__internal_abf6f6b12eab0550ea4f26eb9db5f60c57807b42fade0c80f22e571035dea489_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_32b826d5c3c42b29d19347f3bf0d4581a91bd7f84488e5d8cac341589f8d38eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b826d5c3c42b29d19347f3bf0d4581a91bd7f84488e5d8cac341589f8d38eb->enter($__internal_32b826d5c3c42b29d19347f3bf0d4581a91bd7f84488e5d8cac341589f8d38eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7d17d3a26ed0dd4712ec9004690151930ae8007180bee637f307c5412ea4e33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d17d3a26ed0dd4712ec9004690151930ae8007180bee637f307c5412ea4e33c->enter($__internal_7d17d3a26ed0dd4712ec9004690151930ae8007180bee637f307c5412ea4e33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7d17d3a26ed0dd4712ec9004690151930ae8007180bee637f307c5412ea4e33c->leave($__internal_7d17d3a26ed0dd4712ec9004690151930ae8007180bee637f307c5412ea4e33c_prof);

        
        $__internal_32b826d5c3c42b29d19347f3bf0d4581a91bd7f84488e5d8cac341589f8d38eb->leave($__internal_32b826d5c3c42b29d19347f3bf0d4581a91bd7f84488e5d8cac341589f8d38eb_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ec13a24f1bdd691d1b66b84ad79e61e7260b733824942d94e1b92fb04a1a4e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec13a24f1bdd691d1b66b84ad79e61e7260b733824942d94e1b92fb04a1a4e97->enter($__internal_ec13a24f1bdd691d1b66b84ad79e61e7260b733824942d94e1b92fb04a1a4e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_365555341837b11541337cc8a201227faf7ccb82b728606bf8f3e90f732ecd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365555341837b11541337cc8a201227faf7ccb82b728606bf8f3e90f732ecd01->enter($__internal_365555341837b11541337cc8a201227faf7ccb82b728606bf8f3e90f732ecd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_365555341837b11541337cc8a201227faf7ccb82b728606bf8f3e90f732ecd01->leave($__internal_365555341837b11541337cc8a201227faf7ccb82b728606bf8f3e90f732ecd01_prof);

        
        $__internal_ec13a24f1bdd691d1b66b84ad79e61e7260b733824942d94e1b92fb04a1a4e97->leave($__internal_ec13a24f1bdd691d1b66b84ad79e61e7260b733824942d94e1b92fb04a1a4e97_prof);

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
