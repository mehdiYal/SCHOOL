<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_44d62c652e6cfbd2d6ab01db3f9ff23c1a11aaa11fa83c0246498d315d95b13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c8311015a7ed52ff2d27a569717ece68e30e5d9f04121a21567967b9db85048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8311015a7ed52ff2d27a569717ece68e30e5d9f04121a21567967b9db85048->enter($__internal_2c8311015a7ed52ff2d27a569717ece68e30e5d9f04121a21567967b9db85048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_c01719fa7226f6ef885aa293d9404e37b8021f714e98c28adf20e279316756d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01719fa7226f6ef885aa293d9404e37b8021f714e98c28adf20e279316756d2->enter($__internal_c01719fa7226f6ef885aa293d9404e37b8021f714e98c28adf20e279316756d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8311015a7ed52ff2d27a569717ece68e30e5d9f04121a21567967b9db85048->leave($__internal_2c8311015a7ed52ff2d27a569717ece68e30e5d9f04121a21567967b9db85048_prof);

        
        $__internal_c01719fa7226f6ef885aa293d9404e37b8021f714e98c28adf20e279316756d2->leave($__internal_c01719fa7226f6ef885aa293d9404e37b8021f714e98c28adf20e279316756d2_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c90b4db466897df68aeb68208a4f050e1bb37edff8bbc3b9d7f9b5be251edf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90b4db466897df68aeb68208a4f050e1bb37edff8bbc3b9d7f9b5be251edf3e->enter($__internal_c90b4db466897df68aeb68208a4f050e1bb37edff8bbc3b9d7f9b5be251edf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_df1b69bfeebd8f3b2c2045168248fdbbaff30f0f6c00ed4adb37652ab824ffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1b69bfeebd8f3b2c2045168248fdbbaff30f0f6c00ed4adb37652ab824ffbb->enter($__internal_df1b69bfeebd8f3b2c2045168248fdbbaff30f0f6c00ed4adb37652ab824ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_df1b69bfeebd8f3b2c2045168248fdbbaff30f0f6c00ed4adb37652ab824ffbb->leave($__internal_df1b69bfeebd8f3b2c2045168248fdbbaff30f0f6c00ed4adb37652ab824ffbb_prof);

        
        $__internal_c90b4db466897df68aeb68208a4f050e1bb37edff8bbc3b9d7f9b5be251edf3e->leave($__internal_c90b4db466897df68aeb68208a4f050e1bb37edff8bbc3b9d7f9b5be251edf3e_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_978eeecd5f6c378917ff08f602824b6aad7e1cf72c349191ef53b80a4a6b3ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978eeecd5f6c378917ff08f602824b6aad7e1cf72c349191ef53b80a4a6b3ef2->enter($__internal_978eeecd5f6c378917ff08f602824b6aad7e1cf72c349191ef53b80a4a6b3ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1bcbaf0f3cd914d9d5a85c55b044eaeb3a2ca4e630e2bab9be8419fd65341bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcbaf0f3cd914d9d5a85c55b044eaeb3a2ca4e630e2bab9be8419fd65341bbe->enter($__internal_1bcbaf0f3cd914d9d5a85c55b044eaeb3a2ca4e630e2bab9be8419fd65341bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1bcbaf0f3cd914d9d5a85c55b044eaeb3a2ca4e630e2bab9be8419fd65341bbe->leave($__internal_1bcbaf0f3cd914d9d5a85c55b044eaeb3a2ca4e630e2bab9be8419fd65341bbe_prof);

        
        $__internal_978eeecd5f6c378917ff08f602824b6aad7e1cf72c349191ef53b80a4a6b3ef2->leave($__internal_978eeecd5f6c378917ff08f602824b6aad7e1cf72c349191ef53b80a4a6b3ef2_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_133569caf953bc9c4482fd1a5481b4c3e7a264d56ab96474abb6957195fbc5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133569caf953bc9c4482fd1a5481b4c3e7a264d56ab96474abb6957195fbc5c1->enter($__internal_133569caf953bc9c4482fd1a5481b4c3e7a264d56ab96474abb6957195fbc5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8cc3843dffed468b658b70413296e8e0b47f4b66c94aedf279bf2e6e3536e0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc3843dffed468b658b70413296e8e0b47f4b66c94aedf279bf2e6e3536e0b9->enter($__internal_8cc3843dffed468b658b70413296e8e0b47f4b66c94aedf279bf2e6e3536e0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8cc3843dffed468b658b70413296e8e0b47f4b66c94aedf279bf2e6e3536e0b9->leave($__internal_8cc3843dffed468b658b70413296e8e0b47f4b66c94aedf279bf2e6e3536e0b9_prof);

        
        $__internal_133569caf953bc9c4482fd1a5481b4c3e7a264d56ab96474abb6957195fbc5c1->leave($__internal_133569caf953bc9c4482fd1a5481b4c3e7a264d56ab96474abb6957195fbc5c1_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d6bc4fc9c9b1b2e3baef147a081adbf385a5e7a17b58fe0651f813ddfa6cbbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bc4fc9c9b1b2e3baef147a081adbf385a5e7a17b58fe0651f813ddfa6cbbbb->enter($__internal_d6bc4fc9c9b1b2e3baef147a081adbf385a5e7a17b58fe0651f813ddfa6cbbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1beabb3cdd9dbc106957a55250b6a3c3d4e0f3e1fe85f2654a700597ea05dab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beabb3cdd9dbc106957a55250b6a3c3d4e0f3e1fe85f2654a700597ea05dab3->enter($__internal_1beabb3cdd9dbc106957a55250b6a3c3d4e0f3e1fe85f2654a700597ea05dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_1beabb3cdd9dbc106957a55250b6a3c3d4e0f3e1fe85f2654a700597ea05dab3->leave($__internal_1beabb3cdd9dbc106957a55250b6a3c3d4e0f3e1fe85f2654a700597ea05dab3_prof);

        
        $__internal_d6bc4fc9c9b1b2e3baef147a081adbf385a5e7a17b58fe0651f813ddfa6cbbbb->leave($__internal_d6bc4fc9c9b1b2e3baef147a081adbf385a5e7a17b58fe0651f813ddfa6cbbbb_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_07388808cc417822d92f633b3da214a0d5542e0a10fbd517a3ea16654cd74fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07388808cc417822d92f633b3da214a0d5542e0a10fbd517a3ea16654cd74fd1->enter($__internal_07388808cc417822d92f633b3da214a0d5542e0a10fbd517a3ea16654cd74fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6ba5d0d675d21ae41b69a03029a5b34ea67e1e3b9467777937f9e37abb16de82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba5d0d675d21ae41b69a03029a5b34ea67e1e3b9467777937f9e37abb16de82->enter($__internal_6ba5d0d675d21ae41b69a03029a5b34ea67e1e3b9467777937f9e37abb16de82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_6ba5d0d675d21ae41b69a03029a5b34ea67e1e3b9467777937f9e37abb16de82->leave($__internal_6ba5d0d675d21ae41b69a03029a5b34ea67e1e3b9467777937f9e37abb16de82_prof);

        
        $__internal_07388808cc417822d92f633b3da214a0d5542e0a10fbd517a3ea16654cd74fd1->leave($__internal_07388808cc417822d92f633b3da214a0d5542e0a10fbd517a3ea16654cd74fd1_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_22fb1100555a64bc9d74ee532738781b4167697df1aed49ed6d82d0dde69be6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fb1100555a64bc9d74ee532738781b4167697df1aed49ed6d82d0dde69be6e->enter($__internal_22fb1100555a64bc9d74ee532738781b4167697df1aed49ed6d82d0dde69be6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_58d06b0cbc0229c186e9afebd72fcf843c208e4185d531fa8a2cd73b6d37d8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d06b0cbc0229c186e9afebd72fcf843c208e4185d531fa8a2cd73b6d37d8a5->enter($__internal_58d06b0cbc0229c186e9afebd72fcf843c208e4185d531fa8a2cd73b6d37d8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_58d06b0cbc0229c186e9afebd72fcf843c208e4185d531fa8a2cd73b6d37d8a5->leave($__internal_58d06b0cbc0229c186e9afebd72fcf843c208e4185d531fa8a2cd73b6d37d8a5_prof);

        
        $__internal_22fb1100555a64bc9d74ee532738781b4167697df1aed49ed6d82d0dde69be6e->leave($__internal_22fb1100555a64bc9d74ee532738781b4167697df1aed49ed6d82d0dde69be6e_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_db6af01ed2f0d5726e5e7c3c25a7e666f2ba947c963b6ae9cb03b05d66be818d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6af01ed2f0d5726e5e7c3c25a7e666f2ba947c963b6ae9cb03b05d66be818d->enter($__internal_db6af01ed2f0d5726e5e7c3c25a7e666f2ba947c963b6ae9cb03b05d66be818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5e9a6451ca274182d6d2cf1908e9f58cebfcb0dbb15b6336d905e9324f839716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9a6451ca274182d6d2cf1908e9f58cebfcb0dbb15b6336d905e9324f839716->enter($__internal_5e9a6451ca274182d6d2cf1908e9f58cebfcb0dbb15b6336d905e9324f839716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_5e9a6451ca274182d6d2cf1908e9f58cebfcb0dbb15b6336d905e9324f839716->leave($__internal_5e9a6451ca274182d6d2cf1908e9f58cebfcb0dbb15b6336d905e9324f839716_prof);

        
        $__internal_db6af01ed2f0d5726e5e7c3c25a7e666f2ba947c963b6ae9cb03b05d66be818d->leave($__internal_db6af01ed2f0d5726e5e7c3c25a7e666f2ba947c963b6ae9cb03b05d66be818d_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cb0b6dbe5dc8ec5c2981dc5b9e286c057f1bcb74ac7266f128800e6fb8ff715e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0b6dbe5dc8ec5c2981dc5b9e286c057f1bcb74ac7266f128800e6fb8ff715e->enter($__internal_cb0b6dbe5dc8ec5c2981dc5b9e286c057f1bcb74ac7266f128800e6fb8ff715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9d9442e91346baf48a12e7cf8fbc0f5fe5d714b9a1ae8ff57cf9d78e678528af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9442e91346baf48a12e7cf8fbc0f5fe5d714b9a1ae8ff57cf9d78e678528af->enter($__internal_9d9442e91346baf48a12e7cf8fbc0f5fe5d714b9a1ae8ff57cf9d78e678528af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_9d9442e91346baf48a12e7cf8fbc0f5fe5d714b9a1ae8ff57cf9d78e678528af->leave($__internal_9d9442e91346baf48a12e7cf8fbc0f5fe5d714b9a1ae8ff57cf9d78e678528af_prof);

        
        $__internal_cb0b6dbe5dc8ec5c2981dc5b9e286c057f1bcb74ac7266f128800e6fb8ff715e->leave($__internal_cb0b6dbe5dc8ec5c2981dc5b9e286c057f1bcb74ac7266f128800e6fb8ff715e_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_cfac51024217227a2d43d4c174d59caf159dcd0dc3d81a1eebb145e60ad27fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfac51024217227a2d43d4c174d59caf159dcd0dc3d81a1eebb145e60ad27fd8->enter($__internal_cfac51024217227a2d43d4c174d59caf159dcd0dc3d81a1eebb145e60ad27fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_571ff4758ff3fc445664021baebba53271f6a2ddd38e4f4f7ebcada96e802bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ff4758ff3fc445664021baebba53271f6a2ddd38e4f4f7ebcada96e802bc2->enter($__internal_571ff4758ff3fc445664021baebba53271f6a2ddd38e4f4f7ebcada96e802bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_571ff4758ff3fc445664021baebba53271f6a2ddd38e4f4f7ebcada96e802bc2->leave($__internal_571ff4758ff3fc445664021baebba53271f6a2ddd38e4f4f7ebcada96e802bc2_prof);

        
        $__internal_cfac51024217227a2d43d4c174d59caf159dcd0dc3d81a1eebb145e60ad27fd8->leave($__internal_cfac51024217227a2d43d4c174d59caf159dcd0dc3d81a1eebb145e60ad27fd8_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_33f6df175cc40eccecea7fa8bf08452db1c6e085a475ab4c592d0b539c099f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f6df175cc40eccecea7fa8bf08452db1c6e085a475ab4c592d0b539c099f3e->enter($__internal_33f6df175cc40eccecea7fa8bf08452db1c6e085a475ab4c592d0b539c099f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_12d282cb95d65b8401e70205e7b26e7981c384310970aa5af5ad4ab45c80e76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d282cb95d65b8401e70205e7b26e7981c384310970aa5af5ad4ab45c80e76a->enter($__internal_12d282cb95d65b8401e70205e7b26e7981c384310970aa5af5ad4ab45c80e76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_12d282cb95d65b8401e70205e7b26e7981c384310970aa5af5ad4ab45c80e76a->leave($__internal_12d282cb95d65b8401e70205e7b26e7981c384310970aa5af5ad4ab45c80e76a_prof);

        
        $__internal_33f6df175cc40eccecea7fa8bf08452db1c6e085a475ab4c592d0b539c099f3e->leave($__internal_33f6df175cc40eccecea7fa8bf08452db1c6e085a475ab4c592d0b539c099f3e_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f79eb8e99f25a5d91be92b1405c69d0c991317fe878570769fd8b01c8a2e569f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79eb8e99f25a5d91be92b1405c69d0c991317fe878570769fd8b01c8a2e569f->enter($__internal_f79eb8e99f25a5d91be92b1405c69d0c991317fe878570769fd8b01c8a2e569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4869e8bf7c122c81c8963221d80488a9c98b0de0ff0c1a9fc11e9a46b9645f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4869e8bf7c122c81c8963221d80488a9c98b0de0ff0c1a9fc11e9a46b9645f9f->enter($__internal_4869e8bf7c122c81c8963221d80488a9c98b0de0ff0c1a9fc11e9a46b9645f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_4869e8bf7c122c81c8963221d80488a9c98b0de0ff0c1a9fc11e9a46b9645f9f->leave($__internal_4869e8bf7c122c81c8963221d80488a9c98b0de0ff0c1a9fc11e9a46b9645f9f_prof);

        
        $__internal_f79eb8e99f25a5d91be92b1405c69d0c991317fe878570769fd8b01c8a2e569f->leave($__internal_f79eb8e99f25a5d91be92b1405c69d0c991317fe878570769fd8b01c8a2e569f_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_135361590e2f7127815ab8dc25095c0dba68b10b279ff660708df3946138a986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135361590e2f7127815ab8dc25095c0dba68b10b279ff660708df3946138a986->enter($__internal_135361590e2f7127815ab8dc25095c0dba68b10b279ff660708df3946138a986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_26d6ad07eaddce378f92a007d4b84c5b7139ba73d8a352b71cc2b511577604d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d6ad07eaddce378f92a007d4b84c5b7139ba73d8a352b71cc2b511577604d6->enter($__internal_26d6ad07eaddce378f92a007d4b84c5b7139ba73d8a352b71cc2b511577604d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_26d6ad07eaddce378f92a007d4b84c5b7139ba73d8a352b71cc2b511577604d6->leave($__internal_26d6ad07eaddce378f92a007d4b84c5b7139ba73d8a352b71cc2b511577604d6_prof);

        
        $__internal_135361590e2f7127815ab8dc25095c0dba68b10b279ff660708df3946138a986->leave($__internal_135361590e2f7127815ab8dc25095c0dba68b10b279ff660708df3946138a986_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5d2fea467e89ab87d828f3bcb54a2ce34b69808da10214960d3448ad02c3b5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2fea467e89ab87d828f3bcb54a2ce34b69808da10214960d3448ad02c3b5b5->enter($__internal_5d2fea467e89ab87d828f3bcb54a2ce34b69808da10214960d3448ad02c3b5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0e7fc1065324ba4ad6fb0a4b33f2197ee6e312e6cf12ce82366d198f8f5b9081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7fc1065324ba4ad6fb0a4b33f2197ee6e312e6cf12ce82366d198f8f5b9081->enter($__internal_0e7fc1065324ba4ad6fb0a4b33f2197ee6e312e6cf12ce82366d198f8f5b9081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0e7fc1065324ba4ad6fb0a4b33f2197ee6e312e6cf12ce82366d198f8f5b9081->leave($__internal_0e7fc1065324ba4ad6fb0a4b33f2197ee6e312e6cf12ce82366d198f8f5b9081_prof);

        
        $__internal_5d2fea467e89ab87d828f3bcb54a2ce34b69808da10214960d3448ad02c3b5b5->leave($__internal_5d2fea467e89ab87d828f3bcb54a2ce34b69808da10214960d3448ad02c3b5b5_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_4fbc135fbb5dc8c35ca6da67f923dbb305d5b968a96eee443a0350b31e7cbd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbc135fbb5dc8c35ca6da67f923dbb305d5b968a96eee443a0350b31e7cbd86->enter($__internal_4fbc135fbb5dc8c35ca6da67f923dbb305d5b968a96eee443a0350b31e7cbd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_32ddc75d4933f8b9a4c988c16166fae4a60105fea3c95754d6bf3ae44dcbae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ddc75d4933f8b9a4c988c16166fae4a60105fea3c95754d6bf3ae44dcbae9f->enter($__internal_32ddc75d4933f8b9a4c988c16166fae4a60105fea3c95754d6bf3ae44dcbae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_32ddc75d4933f8b9a4c988c16166fae4a60105fea3c95754d6bf3ae44dcbae9f->leave($__internal_32ddc75d4933f8b9a4c988c16166fae4a60105fea3c95754d6bf3ae44dcbae9f_prof);

        
        $__internal_4fbc135fbb5dc8c35ca6da67f923dbb305d5b968a96eee443a0350b31e7cbd86->leave($__internal_4fbc135fbb5dc8c35ca6da67f923dbb305d5b968a96eee443a0350b31e7cbd86_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bc781d4a69ef8b4ada106b18e53f18bb7ec3cab92f1088598033d81123f3366e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc781d4a69ef8b4ada106b18e53f18bb7ec3cab92f1088598033d81123f3366e->enter($__internal_bc781d4a69ef8b4ada106b18e53f18bb7ec3cab92f1088598033d81123f3366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cb75603cff30334d0f9ec8eb5cb7b850984f43e247bc69ddb5c70e29c0af088e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb75603cff30334d0f9ec8eb5cb7b850984f43e247bc69ddb5c70e29c0af088e->enter($__internal_cb75603cff30334d0f9ec8eb5cb7b850984f43e247bc69ddb5c70e29c0af088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cb75603cff30334d0f9ec8eb5cb7b850984f43e247bc69ddb5c70e29c0af088e->leave($__internal_cb75603cff30334d0f9ec8eb5cb7b850984f43e247bc69ddb5c70e29c0af088e_prof);

        
        $__internal_bc781d4a69ef8b4ada106b18e53f18bb7ec3cab92f1088598033d81123f3366e->leave($__internal_bc781d4a69ef8b4ada106b18e53f18bb7ec3cab92f1088598033d81123f3366e_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_11a4031fe07c2cc43b79d7345b057adbda95add02e0243d598d57dcc6a17e8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a4031fe07c2cc43b79d7345b057adbda95add02e0243d598d57dcc6a17e8e4->enter($__internal_11a4031fe07c2cc43b79d7345b057adbda95add02e0243d598d57dcc6a17e8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_dd34c02d360f64c6a8f5d4a9cdcf702fc952e3c7f107e1e31ed98b7933b5f5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd34c02d360f64c6a8f5d4a9cdcf702fc952e3c7f107e1e31ed98b7933b5f5f8->enter($__internal_dd34c02d360f64c6a8f5d4a9cdcf702fc952e3c7f107e1e31ed98b7933b5f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_dd34c02d360f64c6a8f5d4a9cdcf702fc952e3c7f107e1e31ed98b7933b5f5f8->leave($__internal_dd34c02d360f64c6a8f5d4a9cdcf702fc952e3c7f107e1e31ed98b7933b5f5f8_prof);

        
        $__internal_11a4031fe07c2cc43b79d7345b057adbda95add02e0243d598d57dcc6a17e8e4->leave($__internal_11a4031fe07c2cc43b79d7345b057adbda95add02e0243d598d57dcc6a17e8e4_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_cfcb1a6a26bedd011fe6335142d7b03bdc5f193cf7b6f2cb9842565f35e6e4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcb1a6a26bedd011fe6335142d7b03bdc5f193cf7b6f2cb9842565f35e6e4d0->enter($__internal_cfcb1a6a26bedd011fe6335142d7b03bdc5f193cf7b6f2cb9842565f35e6e4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c40945a528326bd2093059a23dcb59042f4526abb0d89200532fee5e590bfa12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40945a528326bd2093059a23dcb59042f4526abb0d89200532fee5e590bfa12->enter($__internal_c40945a528326bd2093059a23dcb59042f4526abb0d89200532fee5e590bfa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 255
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_c40945a528326bd2093059a23dcb59042f4526abb0d89200532fee5e590bfa12->leave($__internal_c40945a528326bd2093059a23dcb59042f4526abb0d89200532fee5e590bfa12_prof);

        
        $__internal_cfcb1a6a26bedd011fe6335142d7b03bdc5f193cf7b6f2cb9842565f35e6e4d0->leave($__internal_cfcb1a6a26bedd011fe6335142d7b03bdc5f193cf7b6f2cb9842565f35e6e4d0_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_af980b873488bbfa2fd69b4d73b1a2152e372ee82735c4fb9dba8a8731ce19df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af980b873488bbfa2fd69b4d73b1a2152e372ee82735c4fb9dba8a8731ce19df->enter($__internal_af980b873488bbfa2fd69b4d73b1a2152e372ee82735c4fb9dba8a8731ce19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_71cd1b4aa653d6c1575b3e36edbc2faa45155ae604be0bdcfc8cdc06dc9b9185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cd1b4aa653d6c1575b3e36edbc2faa45155ae604be0bdcfc8cdc06dc9b9185->enter($__internal_71cd1b4aa653d6c1575b3e36edbc2faa45155ae604be0bdcfc8cdc06dc9b9185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_71cd1b4aa653d6c1575b3e36edbc2faa45155ae604be0bdcfc8cdc06dc9b9185->leave($__internal_71cd1b4aa653d6c1575b3e36edbc2faa45155ae604be0bdcfc8cdc06dc9b9185_prof);

        
        $__internal_af980b873488bbfa2fd69b4d73b1a2152e372ee82735c4fb9dba8a8731ce19df->leave($__internal_af980b873488bbfa2fd69b4d73b1a2152e372ee82735c4fb9dba8a8731ce19df_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7d6ebcf455fbb6f887bf0fb6a899d341af33fe8d1d801c317b143cafca8e3de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ebcf455fbb6f887bf0fb6a899d341af33fe8d1d801c317b143cafca8e3de1->enter($__internal_7d6ebcf455fbb6f887bf0fb6a899d341af33fe8d1d801c317b143cafca8e3de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f8435776857c7c5170812fc7f7d876875cd3e3558cbd6cb92836a63bff1e036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8435776857c7c5170812fc7f7d876875cd3e3558cbd6cb92836a63bff1e036c->enter($__internal_f8435776857c7c5170812fc7f7d876875cd3e3558cbd6cb92836a63bff1e036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f8435776857c7c5170812fc7f7d876875cd3e3558cbd6cb92836a63bff1e036c->leave($__internal_f8435776857c7c5170812fc7f7d876875cd3e3558cbd6cb92836a63bff1e036c_prof);

        
        $__internal_7d6ebcf455fbb6f887bf0fb6a899d341af33fe8d1d801c317b143cafca8e3de1->leave($__internal_7d6ebcf455fbb6f887bf0fb6a899d341af33fe8d1d801c317b143cafca8e3de1_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8ea92154ef5f434158820d6b8ec0269871431cc5b9b7863dc8edb9162b029682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea92154ef5f434158820d6b8ec0269871431cc5b9b7863dc8edb9162b029682->enter($__internal_8ea92154ef5f434158820d6b8ec0269871431cc5b9b7863dc8edb9162b029682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_305090b117c5fdce44919d73b051d0c920cfd20085fb977693a577b0b3570a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305090b117c5fdce44919d73b051d0c920cfd20085fb977693a577b0b3570a66->enter($__internal_305090b117c5fdce44919d73b051d0c920cfd20085fb977693a577b0b3570a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_305090b117c5fdce44919d73b051d0c920cfd20085fb977693a577b0b3570a66->leave($__internal_305090b117c5fdce44919d73b051d0c920cfd20085fb977693a577b0b3570a66_prof);

        
        $__internal_8ea92154ef5f434158820d6b8ec0269871431cc5b9b7863dc8edb9162b029682->leave($__internal_8ea92154ef5f434158820d6b8ec0269871431cc5b9b7863dc8edb9162b029682_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ba3e6c41564c1c6790ca95fff5e8fcde431bd7e6596ab4db51bb1e65623ae52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3e6c41564c1c6790ca95fff5e8fcde431bd7e6596ab4db51bb1e65623ae52e->enter($__internal_ba3e6c41564c1c6790ca95fff5e8fcde431bd7e6596ab4db51bb1e65623ae52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8540dd63fe34b357b1bca420bb2384fdfcb57b6e4f685d635d0991e8646b2419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8540dd63fe34b357b1bca420bb2384fdfcb57b6e4f685d635d0991e8646b2419->enter($__internal_8540dd63fe34b357b1bca420bb2384fdfcb57b6e4f685d635d0991e8646b2419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8540dd63fe34b357b1bca420bb2384fdfcb57b6e4f685d635d0991e8646b2419->leave($__internal_8540dd63fe34b357b1bca420bb2384fdfcb57b6e4f685d635d0991e8646b2419_prof);

        
        $__internal_ba3e6c41564c1c6790ca95fff5e8fcde431bd7e6596ab4db51bb1e65623ae52e->leave($__internal_ba3e6c41564c1c6790ca95fff5e8fcde431bd7e6596ab4db51bb1e65623ae52e_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_96da9a993ecc50d0a95dc2b2eeb3996e8980a4026cd3fe29d1612b7995b34f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96da9a993ecc50d0a95dc2b2eeb3996e8980a4026cd3fe29d1612b7995b34f6a->enter($__internal_96da9a993ecc50d0a95dc2b2eeb3996e8980a4026cd3fe29d1612b7995b34f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e4ae513d3c6b5fbdf32856976cc12c2c8e499d4cb60d55ca31743758b568ad89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ae513d3c6b5fbdf32856976cc12c2c8e499d4cb60d55ca31743758b568ad89->enter($__internal_e4ae513d3c6b5fbdf32856976cc12c2c8e499d4cb60d55ca31743758b568ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e4ae513d3c6b5fbdf32856976cc12c2c8e499d4cb60d55ca31743758b568ad89->leave($__internal_e4ae513d3c6b5fbdf32856976cc12c2c8e499d4cb60d55ca31743758b568ad89_prof);

        
        $__internal_96da9a993ecc50d0a95dc2b2eeb3996e8980a4026cd3fe29d1612b7995b34f6a->leave($__internal_96da9a993ecc50d0a95dc2b2eeb3996e8980a4026cd3fe29d1612b7995b34f6a_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2f05a792edf819419b8b5828cc130e8fb824abd32128bde986c5c89b5fe9fca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f05a792edf819419b8b5828cc130e8fb824abd32128bde986c5c89b5fe9fca9->enter($__internal_2f05a792edf819419b8b5828cc130e8fb824abd32128bde986c5c89b5fe9fca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3f4129bb6e0d2cccce4a81a19dc89e1d5cc8e2d8e9c4fd39d315c87e43d707d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4129bb6e0d2cccce4a81a19dc89e1d5cc8e2d8e9c4fd39d315c87e43d707d8->enter($__internal_3f4129bb6e0d2cccce4a81a19dc89e1d5cc8e2d8e9c4fd39d315c87e43d707d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_3f4129bb6e0d2cccce4a81a19dc89e1d5cc8e2d8e9c4fd39d315c87e43d707d8->leave($__internal_3f4129bb6e0d2cccce4a81a19dc89e1d5cc8e2d8e9c4fd39d315c87e43d707d8_prof);

        
        $__internal_2f05a792edf819419b8b5828cc130e8fb824abd32128bde986c5c89b5fe9fca9->leave($__internal_2f05a792edf819419b8b5828cc130e8fb824abd32128bde986c5c89b5fe9fca9_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a3cef86abac313c0bf4b356eed081c97a07872154cfb2982948ddab0feccdbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cef86abac313c0bf4b356eed081c97a07872154cfb2982948ddab0feccdbdb->enter($__internal_a3cef86abac313c0bf4b356eed081c97a07872154cfb2982948ddab0feccdbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ad6af682adcb41070bc097eb785895ad7cf7f5fb6d4fc55c093ca85979e1f4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6af682adcb41070bc097eb785895ad7cf7f5fb6d4fc55c093ca85979e1f4c5->enter($__internal_ad6af682adcb41070bc097eb785895ad7cf7f5fb6d4fc55c093ca85979e1f4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ad6af682adcb41070bc097eb785895ad7cf7f5fb6d4fc55c093ca85979e1f4c5->leave($__internal_ad6af682adcb41070bc097eb785895ad7cf7f5fb6d4fc55c093ca85979e1f4c5_prof);

        
        $__internal_a3cef86abac313c0bf4b356eed081c97a07872154cfb2982948ddab0feccdbdb->leave($__internal_a3cef86abac313c0bf4b356eed081c97a07872154cfb2982948ddab0feccdbdb_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1ffc8992bda609c9883ac7556af69c9f4a5e80f516bd67b77349491379d8025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffc8992bda609c9883ac7556af69c9f4a5e80f516bd67b77349491379d8025a->enter($__internal_1ffc8992bda609c9883ac7556af69c9f4a5e80f516bd67b77349491379d8025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_67c1bbaffdadd14be79cf7e781f964372d535d29b637bf37ea49500779f0a52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c1bbaffdadd14be79cf7e781f964372d535d29b637bf37ea49500779f0a52f->enter($__internal_67c1bbaffdadd14be79cf7e781f964372d535d29b637bf37ea49500779f0a52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_67c1bbaffdadd14be79cf7e781f964372d535d29b637bf37ea49500779f0a52f->leave($__internal_67c1bbaffdadd14be79cf7e781f964372d535d29b637bf37ea49500779f0a52f_prof);

        
        $__internal_1ffc8992bda609c9883ac7556af69c9f4a5e80f516bd67b77349491379d8025a->leave($__internal_1ffc8992bda609c9883ac7556af69c9f4a5e80f516bd67b77349491379d8025a_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
