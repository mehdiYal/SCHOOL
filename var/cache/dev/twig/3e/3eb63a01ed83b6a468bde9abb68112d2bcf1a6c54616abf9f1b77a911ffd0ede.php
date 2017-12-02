<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f3c76b551c2c001d5c45ce4dbf98fffc68601750fa231293fea6bebfa9d12c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_871a3d166b08adf394e448882952a871d5f640ca9418afa2b1cea44c21fd98c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871a3d166b08adf394e448882952a871d5f640ca9418afa2b1cea44c21fd98c3->enter($__internal_871a3d166b08adf394e448882952a871d5f640ca9418afa2b1cea44c21fd98c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c7006c23bfa5cbefd6d255a8db3346272388edf243a5305b5b0e7453d2c4aee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7006c23bfa5cbefd6d255a8db3346272388edf243a5305b5b0e7453d2c4aee3->enter($__internal_c7006c23bfa5cbefd6d255a8db3346272388edf243a5305b5b0e7453d2c4aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_871a3d166b08adf394e448882952a871d5f640ca9418afa2b1cea44c21fd98c3->leave($__internal_871a3d166b08adf394e448882952a871d5f640ca9418afa2b1cea44c21fd98c3_prof);

        
        $__internal_c7006c23bfa5cbefd6d255a8db3346272388edf243a5305b5b0e7453d2c4aee3->leave($__internal_c7006c23bfa5cbefd6d255a8db3346272388edf243a5305b5b0e7453d2c4aee3_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f6b3a4311a7898cbb9413d6e2bbbea6cfac4b3ca257aca4360937500945e955e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b3a4311a7898cbb9413d6e2bbbea6cfac4b3ca257aca4360937500945e955e->enter($__internal_f6b3a4311a7898cbb9413d6e2bbbea6cfac4b3ca257aca4360937500945e955e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2b5d939048362899e13ee2a4cfa2118a45591a5580b2e65e7d4e17ead2b97a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d939048362899e13ee2a4cfa2118a45591a5580b2e65e7d4e17ead2b97a04->enter($__internal_2b5d939048362899e13ee2a4cfa2118a45591a5580b2e65e7d4e17ead2b97a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2b5d939048362899e13ee2a4cfa2118a45591a5580b2e65e7d4e17ead2b97a04->leave($__internal_2b5d939048362899e13ee2a4cfa2118a45591a5580b2e65e7d4e17ead2b97a04_prof);

        
        $__internal_f6b3a4311a7898cbb9413d6e2bbbea6cfac4b3ca257aca4360937500945e955e->leave($__internal_f6b3a4311a7898cbb9413d6e2bbbea6cfac4b3ca257aca4360937500945e955e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dee06fc2db253b7311993a0b89d5267e3236ca1bcb0e9493ae942d9b6162ab9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee06fc2db253b7311993a0b89d5267e3236ca1bcb0e9493ae942d9b6162ab9f->enter($__internal_dee06fc2db253b7311993a0b89d5267e3236ca1bcb0e9493ae942d9b6162ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d33d4a32197251468dc047bf8dc555c75fd32f4da0f2bbf483d11c1aae4ae0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33d4a32197251468dc047bf8dc555c75fd32f4da0f2bbf483d11c1aae4ae0d0->enter($__internal_d33d4a32197251468dc047bf8dc555c75fd32f4da0f2bbf483d11c1aae4ae0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d33d4a32197251468dc047bf8dc555c75fd32f4da0f2bbf483d11c1aae4ae0d0->leave($__internal_d33d4a32197251468dc047bf8dc555c75fd32f4da0f2bbf483d11c1aae4ae0d0_prof);

        
        $__internal_dee06fc2db253b7311993a0b89d5267e3236ca1bcb0e9493ae942d9b6162ab9f->leave($__internal_dee06fc2db253b7311993a0b89d5267e3236ca1bcb0e9493ae942d9b6162ab9f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d3d44ae9df1fc05fcc089ac1ac0e5990bdccf2be55d9758c5b6e39fd273af3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d44ae9df1fc05fcc089ac1ac0e5990bdccf2be55d9758c5b6e39fd273af3f1->enter($__internal_d3d44ae9df1fc05fcc089ac1ac0e5990bdccf2be55d9758c5b6e39fd273af3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_342e920e0743ca87406ff82e3c689041e23953d8c0559f68348c031d2e6e316a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342e920e0743ca87406ff82e3c689041e23953d8c0559f68348c031d2e6e316a->enter($__internal_342e920e0743ca87406ff82e3c689041e23953d8c0559f68348c031d2e6e316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_342e920e0743ca87406ff82e3c689041e23953d8c0559f68348c031d2e6e316a->leave($__internal_342e920e0743ca87406ff82e3c689041e23953d8c0559f68348c031d2e6e316a_prof);

        
        $__internal_d3d44ae9df1fc05fcc089ac1ac0e5990bdccf2be55d9758c5b6e39fd273af3f1->leave($__internal_d3d44ae9df1fc05fcc089ac1ac0e5990bdccf2be55d9758c5b6e39fd273af3f1_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_734a0a85fba119ba55649cade6775886d5b229d75e9ce02ba2ae4ee6f2855db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734a0a85fba119ba55649cade6775886d5b229d75e9ce02ba2ae4ee6f2855db6->enter($__internal_734a0a85fba119ba55649cade6775886d5b229d75e9ce02ba2ae4ee6f2855db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6dcbbaa976b244c711855527acddb3e905c1b46703f23629f465783a8549614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcbbaa976b244c711855527acddb3e905c1b46703f23629f465783a8549614e->enter($__internal_6dcbbaa976b244c711855527acddb3e905c1b46703f23629f465783a8549614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_a08d476123b64861438122e832eed5a103e3610cf86a5eced232e1f02f565cf6 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_a3a35983d3b907675440f0b7fc3c6c9689b6278d065f5c3830808d2b0d2b3a63 = "{{") && ('' === $__internal_a3a35983d3b907675440f0b7fc3c6c9689b6278d065f5c3830808d2b0d2b3a63 || 0 === strpos($__internal_a08d476123b64861438122e832eed5a103e3610cf86a5eced232e1f02f565cf6, $__internal_a3a35983d3b907675440f0b7fc3c6c9689b6278d065f5c3830808d2b0d2b3a63)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_6dcbbaa976b244c711855527acddb3e905c1b46703f23629f465783a8549614e->leave($__internal_6dcbbaa976b244c711855527acddb3e905c1b46703f23629f465783a8549614e_prof);

        
        $__internal_734a0a85fba119ba55649cade6775886d5b229d75e9ce02ba2ae4ee6f2855db6->leave($__internal_734a0a85fba119ba55649cade6775886d5b229d75e9ce02ba2ae4ee6f2855db6_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4482521423fe7706c77ae1d614b9f8e2e6bf094617b577c7bdc160995748776c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4482521423fe7706c77ae1d614b9f8e2e6bf094617b577c7bdc160995748776c->enter($__internal_4482521423fe7706c77ae1d614b9f8e2e6bf094617b577c7bdc160995748776c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f64f41635a9c9936a514a207822532218d6111c8a0d2f12d1bbbc8a020ec8d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64f41635a9c9936a514a207822532218d6111c8a0d2f12d1bbbc8a020ec8d10->enter($__internal_f64f41635a9c9936a514a207822532218d6111c8a0d2f12d1bbbc8a020ec8d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f64f41635a9c9936a514a207822532218d6111c8a0d2f12d1bbbc8a020ec8d10->leave($__internal_f64f41635a9c9936a514a207822532218d6111c8a0d2f12d1bbbc8a020ec8d10_prof);

        
        $__internal_4482521423fe7706c77ae1d614b9f8e2e6bf094617b577c7bdc160995748776c->leave($__internal_4482521423fe7706c77ae1d614b9f8e2e6bf094617b577c7bdc160995748776c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_362609fb65c748216ddc5ed8d2ec942c8590c82bbc50facd72d2d7a46ee4c40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362609fb65c748216ddc5ed8d2ec942c8590c82bbc50facd72d2d7a46ee4c40a->enter($__internal_362609fb65c748216ddc5ed8d2ec942c8590c82bbc50facd72d2d7a46ee4c40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_36890363b70a223d3b0c76af713ba6d1b2a9ef99c8f64e80164f3cb03bf4e4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36890363b70a223d3b0c76af713ba6d1b2a9ef99c8f64e80164f3cb03bf4e4da->enter($__internal_36890363b70a223d3b0c76af713ba6d1b2a9ef99c8f64e80164f3cb03bf4e4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_36890363b70a223d3b0c76af713ba6d1b2a9ef99c8f64e80164f3cb03bf4e4da->leave($__internal_36890363b70a223d3b0c76af713ba6d1b2a9ef99c8f64e80164f3cb03bf4e4da_prof);

        
        $__internal_362609fb65c748216ddc5ed8d2ec942c8590c82bbc50facd72d2d7a46ee4c40a->leave($__internal_362609fb65c748216ddc5ed8d2ec942c8590c82bbc50facd72d2d7a46ee4c40a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_853704035ffcdae244d59b26d9840138eb6ff2209cb7380806889de9c50eb7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853704035ffcdae244d59b26d9840138eb6ff2209cb7380806889de9c50eb7ea->enter($__internal_853704035ffcdae244d59b26d9840138eb6ff2209cb7380806889de9c50eb7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ec31d1acebc82c5706d7897947eaa3e81e12dec796897a8f71c61bb190b4d0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec31d1acebc82c5706d7897947eaa3e81e12dec796897a8f71c61bb190b4d0bb->enter($__internal_ec31d1acebc82c5706d7897947eaa3e81e12dec796897a8f71c61bb190b4d0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_ec31d1acebc82c5706d7897947eaa3e81e12dec796897a8f71c61bb190b4d0bb->leave($__internal_ec31d1acebc82c5706d7897947eaa3e81e12dec796897a8f71c61bb190b4d0bb_prof);

        
        $__internal_853704035ffcdae244d59b26d9840138eb6ff2209cb7380806889de9c50eb7ea->leave($__internal_853704035ffcdae244d59b26d9840138eb6ff2209cb7380806889de9c50eb7ea_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8eb6c2e59240ee8dbe31eb8456b8e5e67f2aa08199f8673989fdd0dfb1d78101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb6c2e59240ee8dbe31eb8456b8e5e67f2aa08199f8673989fdd0dfb1d78101->enter($__internal_8eb6c2e59240ee8dbe31eb8456b8e5e67f2aa08199f8673989fdd0dfb1d78101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e8018437631a6c947ec44c1a9b8eb13d30b3e9a4a3f049737c30e049ef8b95d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8018437631a6c947ec44c1a9b8eb13d30b3e9a4a3f049737c30e049ef8b95d1->enter($__internal_e8018437631a6c947ec44c1a9b8eb13d30b3e9a4a3f049737c30e049ef8b95d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_e8018437631a6c947ec44c1a9b8eb13d30b3e9a4a3f049737c30e049ef8b95d1->leave($__internal_e8018437631a6c947ec44c1a9b8eb13d30b3e9a4a3f049737c30e049ef8b95d1_prof);

        
        $__internal_8eb6c2e59240ee8dbe31eb8456b8e5e67f2aa08199f8673989fdd0dfb1d78101->leave($__internal_8eb6c2e59240ee8dbe31eb8456b8e5e67f2aa08199f8673989fdd0dfb1d78101_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_46f3eb6cafec36957050ec36ce5ed3079762835544f31101e3f00ca3a3fe13f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f3eb6cafec36957050ec36ce5ed3079762835544f31101e3f00ca3a3fe13f6->enter($__internal_46f3eb6cafec36957050ec36ce5ed3079762835544f31101e3f00ca3a3fe13f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9a27ecc1eda10d0b30c36c3a79df1aa7ed4c05fd971b79fb55aad3f5d91de250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a27ecc1eda10d0b30c36c3a79df1aa7ed4c05fd971b79fb55aad3f5d91de250->enter($__internal_9a27ecc1eda10d0b30c36c3a79df1aa7ed4c05fd971b79fb55aad3f5d91de250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_9a27ecc1eda10d0b30c36c3a79df1aa7ed4c05fd971b79fb55aad3f5d91de250->leave($__internal_9a27ecc1eda10d0b30c36c3a79df1aa7ed4c05fd971b79fb55aad3f5d91de250_prof);

        
        $__internal_46f3eb6cafec36957050ec36ce5ed3079762835544f31101e3f00ca3a3fe13f6->leave($__internal_46f3eb6cafec36957050ec36ce5ed3079762835544f31101e3f00ca3a3fe13f6_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_757d1ef5e157d2d297d1a0e4975a83779971ba9b5d8747fff112363678873e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757d1ef5e157d2d297d1a0e4975a83779971ba9b5d8747fff112363678873e58->enter($__internal_757d1ef5e157d2d297d1a0e4975a83779971ba9b5d8747fff112363678873e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1b90c680796c63dfdf29b66de60de2d652798953619134cbfa6563803756865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b90c680796c63dfdf29b66de60de2d652798953619134cbfa6563803756865a->enter($__internal_1b90c680796c63dfdf29b66de60de2d652798953619134cbfa6563803756865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1b90c680796c63dfdf29b66de60de2d652798953619134cbfa6563803756865a->leave($__internal_1b90c680796c63dfdf29b66de60de2d652798953619134cbfa6563803756865a_prof);

        
        $__internal_757d1ef5e157d2d297d1a0e4975a83779971ba9b5d8747fff112363678873e58->leave($__internal_757d1ef5e157d2d297d1a0e4975a83779971ba9b5d8747fff112363678873e58_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_289dbc34a526b966362b2a8a1c1e06c99d16867ee1385a94d066698cd7077b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289dbc34a526b966362b2a8a1c1e06c99d16867ee1385a94d066698cd7077b2e->enter($__internal_289dbc34a526b966362b2a8a1c1e06c99d16867ee1385a94d066698cd7077b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_41f7b89fb897f7698ea2c5635f34f8dac8019169726c246492677c22ea7ce27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f7b89fb897f7698ea2c5635f34f8dac8019169726c246492677c22ea7ce27d->enter($__internal_41f7b89fb897f7698ea2c5635f34f8dac8019169726c246492677c22ea7ce27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_41f7b89fb897f7698ea2c5635f34f8dac8019169726c246492677c22ea7ce27d->leave($__internal_41f7b89fb897f7698ea2c5635f34f8dac8019169726c246492677c22ea7ce27d_prof);

        
        $__internal_289dbc34a526b966362b2a8a1c1e06c99d16867ee1385a94d066698cd7077b2e->leave($__internal_289dbc34a526b966362b2a8a1c1e06c99d16867ee1385a94d066698cd7077b2e_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_52ebe8fbfb146fae71aafb3638583ab1d6524e645cf7707a235e039aba97505a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ebe8fbfb146fae71aafb3638583ab1d6524e645cf7707a235e039aba97505a->enter($__internal_52ebe8fbfb146fae71aafb3638583ab1d6524e645cf7707a235e039aba97505a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b9e8765a3b527c67cf7458b048a6f3fc7c0ec6082c783bc6de46b6a5b43ebbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e8765a3b527c67cf7458b048a6f3fc7c0ec6082c783bc6de46b6a5b43ebbb6->enter($__internal_b9e8765a3b527c67cf7458b048a6f3fc7c0ec6082c783bc6de46b6a5b43ebbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_b9e8765a3b527c67cf7458b048a6f3fc7c0ec6082c783bc6de46b6a5b43ebbb6->leave($__internal_b9e8765a3b527c67cf7458b048a6f3fc7c0ec6082c783bc6de46b6a5b43ebbb6_prof);

        
        $__internal_52ebe8fbfb146fae71aafb3638583ab1d6524e645cf7707a235e039aba97505a->leave($__internal_52ebe8fbfb146fae71aafb3638583ab1d6524e645cf7707a235e039aba97505a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e99b7205e9886edda7cd7924b59e0ab1cffaf9b1dabb9f0ba57a93f6ed404259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99b7205e9886edda7cd7924b59e0ab1cffaf9b1dabb9f0ba57a93f6ed404259->enter($__internal_e99b7205e9886edda7cd7924b59e0ab1cffaf9b1dabb9f0ba57a93f6ed404259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_59ae027b0933e3471167ca527643b305f29b20c823fb10066b427580a5911364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ae027b0933e3471167ca527643b305f29b20c823fb10066b427580a5911364->enter($__internal_59ae027b0933e3471167ca527643b305f29b20c823fb10066b427580a5911364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_59ae027b0933e3471167ca527643b305f29b20c823fb10066b427580a5911364->leave($__internal_59ae027b0933e3471167ca527643b305f29b20c823fb10066b427580a5911364_prof);

        
        $__internal_e99b7205e9886edda7cd7924b59e0ab1cffaf9b1dabb9f0ba57a93f6ed404259->leave($__internal_e99b7205e9886edda7cd7924b59e0ab1cffaf9b1dabb9f0ba57a93f6ed404259_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5486151daccf606de654a9786bbaf44fa22a322608407b5241423b9319b414d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5486151daccf606de654a9786bbaf44fa22a322608407b5241423b9319b414d5->enter($__internal_5486151daccf606de654a9786bbaf44fa22a322608407b5241423b9319b414d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7feb5663577348ffc07ae60ef5cbe6398abadb67df88476b9b2028ccb47fd953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7feb5663577348ffc07ae60ef5cbe6398abadb67df88476b9b2028ccb47fd953->enter($__internal_7feb5663577348ffc07ae60ef5cbe6398abadb67df88476b9b2028ccb47fd953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7feb5663577348ffc07ae60ef5cbe6398abadb67df88476b9b2028ccb47fd953->leave($__internal_7feb5663577348ffc07ae60ef5cbe6398abadb67df88476b9b2028ccb47fd953_prof);

        
        $__internal_5486151daccf606de654a9786bbaf44fa22a322608407b5241423b9319b414d5->leave($__internal_5486151daccf606de654a9786bbaf44fa22a322608407b5241423b9319b414d5_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_08d0f4b1a21392940e8eba918c717a478ab3a2a122e130f335d6c366134f9d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d0f4b1a21392940e8eba918c717a478ab3a2a122e130f335d6c366134f9d13->enter($__internal_08d0f4b1a21392940e8eba918c717a478ab3a2a122e130f335d6c366134f9d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_041738af1bd1cf1c898798693d70de94adc2bfd548a16bb77996048820cb6c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041738af1bd1cf1c898798693d70de94adc2bfd548a16bb77996048820cb6c5d->enter($__internal_041738af1bd1cf1c898798693d70de94adc2bfd548a16bb77996048820cb6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_041738af1bd1cf1c898798693d70de94adc2bfd548a16bb77996048820cb6c5d->leave($__internal_041738af1bd1cf1c898798693d70de94adc2bfd548a16bb77996048820cb6c5d_prof);

        
        $__internal_08d0f4b1a21392940e8eba918c717a478ab3a2a122e130f335d6c366134f9d13->leave($__internal_08d0f4b1a21392940e8eba918c717a478ab3a2a122e130f335d6c366134f9d13_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7328b39c20b507ca3da7db8f00c76e0f96a636f25affee4ab745f58d5fd5d4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7328b39c20b507ca3da7db8f00c76e0f96a636f25affee4ab745f58d5fd5d4d7->enter($__internal_7328b39c20b507ca3da7db8f00c76e0f96a636f25affee4ab745f58d5fd5d4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6ca1363247aa999e1c611f6385a0d351fd304248a82b397eed67a1c598781376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca1363247aa999e1c611f6385a0d351fd304248a82b397eed67a1c598781376->enter($__internal_6ca1363247aa999e1c611f6385a0d351fd304248a82b397eed67a1c598781376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6ca1363247aa999e1c611f6385a0d351fd304248a82b397eed67a1c598781376->leave($__internal_6ca1363247aa999e1c611f6385a0d351fd304248a82b397eed67a1c598781376_prof);

        
        $__internal_7328b39c20b507ca3da7db8f00c76e0f96a636f25affee4ab745f58d5fd5d4d7->leave($__internal_7328b39c20b507ca3da7db8f00c76e0f96a636f25affee4ab745f58d5fd5d4d7_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d3371482dbb321cd44fb5f0733548bde8cc22c0ccfe409a5751ecfcbf3f56c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3371482dbb321cd44fb5f0733548bde8cc22c0ccfe409a5751ecfcbf3f56c54->enter($__internal_d3371482dbb321cd44fb5f0733548bde8cc22c0ccfe409a5751ecfcbf3f56c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_79751cba95f99739b61c9b1d8370da518d34a95b11d1d11d6d9bbd72a77bef70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79751cba95f99739b61c9b1d8370da518d34a95b11d1d11d6d9bbd72a77bef70->enter($__internal_79751cba95f99739b61c9b1d8370da518d34a95b11d1d11d6d9bbd72a77bef70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_79751cba95f99739b61c9b1d8370da518d34a95b11d1d11d6d9bbd72a77bef70->leave($__internal_79751cba95f99739b61c9b1d8370da518d34a95b11d1d11d6d9bbd72a77bef70_prof);

        
        $__internal_d3371482dbb321cd44fb5f0733548bde8cc22c0ccfe409a5751ecfcbf3f56c54->leave($__internal_d3371482dbb321cd44fb5f0733548bde8cc22c0ccfe409a5751ecfcbf3f56c54_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_aaeef277a338bdd4daedc4b5d86bbed596f9c3ae49edfd6d2114818b330f9b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaeef277a338bdd4daedc4b5d86bbed596f9c3ae49edfd6d2114818b330f9b2a->enter($__internal_aaeef277a338bdd4daedc4b5d86bbed596f9c3ae49edfd6d2114818b330f9b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_91825ca4adf06b5d6697cb2d517076d882f5dc5e243078e97165328f20899b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91825ca4adf06b5d6697cb2d517076d882f5dc5e243078e97165328f20899b3c->enter($__internal_91825ca4adf06b5d6697cb2d517076d882f5dc5e243078e97165328f20899b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
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
            echo ">";
            // line 220
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_91825ca4adf06b5d6697cb2d517076d882f5dc5e243078e97165328f20899b3c->leave($__internal_91825ca4adf06b5d6697cb2d517076d882f5dc5e243078e97165328f20899b3c_prof);

        
        $__internal_aaeef277a338bdd4daedc4b5d86bbed596f9c3ae49edfd6d2114818b330f9b2a->leave($__internal_aaeef277a338bdd4daedc4b5d86bbed596f9c3ae49edfd6d2114818b330f9b2a_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9503e82bf0cbc2d76ae00a64210f82c3d420c02148604f946a1d709da75eb731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9503e82bf0cbc2d76ae00a64210f82c3d420c02148604f946a1d709da75eb731->enter($__internal_9503e82bf0cbc2d76ae00a64210f82c3d420c02148604f946a1d709da75eb731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_386fa35793a1202225739a1f23570c5a2983447985c032961e5ffdfd3858cd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386fa35793a1202225739a1f23570c5a2983447985c032961e5ffdfd3858cd7e->enter($__internal_386fa35793a1202225739a1f23570c5a2983447985c032961e5ffdfd3858cd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_386fa35793a1202225739a1f23570c5a2983447985c032961e5ffdfd3858cd7e->leave($__internal_386fa35793a1202225739a1f23570c5a2983447985c032961e5ffdfd3858cd7e_prof);

        
        $__internal_9503e82bf0cbc2d76ae00a64210f82c3d420c02148604f946a1d709da75eb731->leave($__internal_9503e82bf0cbc2d76ae00a64210f82c3d420c02148604f946a1d709da75eb731_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e4af6a2bf3d4aeb39e749d6f789d906b4282610562d73c5bc627d71beb8b13a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4af6a2bf3d4aeb39e749d6f789d906b4282610562d73c5bc627d71beb8b13a2->enter($__internal_e4af6a2bf3d4aeb39e749d6f789d906b4282610562d73c5bc627d71beb8b13a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a7487921d69430d34d326913456ebf12298ff44385dbb7e429da2bc7f1307634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7487921d69430d34d326913456ebf12298ff44385dbb7e429da2bc7f1307634->enter($__internal_a7487921d69430d34d326913456ebf12298ff44385dbb7e429da2bc7f1307634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_a7487921d69430d34d326913456ebf12298ff44385dbb7e429da2bc7f1307634->leave($__internal_a7487921d69430d34d326913456ebf12298ff44385dbb7e429da2bc7f1307634_prof);

        
        $__internal_e4af6a2bf3d4aeb39e749d6f789d906b4282610562d73c5bc627d71beb8b13a2->leave($__internal_e4af6a2bf3d4aeb39e749d6f789d906b4282610562d73c5bc627d71beb8b13a2_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e4347fe0ede88fe88199d9ac68c84d5dc3d27505902506d8345423092e16cb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4347fe0ede88fe88199d9ac68c84d5dc3d27505902506d8345423092e16cb6e->enter($__internal_e4347fe0ede88fe88199d9ac68c84d5dc3d27505902506d8345423092e16cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_58c47b1ac187dd341355faa23e9cd4dbb3088c66bfc77c035b81192b23dd8ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c47b1ac187dd341355faa23e9cd4dbb3088c66bfc77c035b81192b23dd8ff5->enter($__internal_58c47b1ac187dd341355faa23e9cd4dbb3088c66bfc77c035b81192b23dd8ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_58c47b1ac187dd341355faa23e9cd4dbb3088c66bfc77c035b81192b23dd8ff5->leave($__internal_58c47b1ac187dd341355faa23e9cd4dbb3088c66bfc77c035b81192b23dd8ff5_prof);

        
        $__internal_e4347fe0ede88fe88199d9ac68c84d5dc3d27505902506d8345423092e16cb6e->leave($__internal_e4347fe0ede88fe88199d9ac68c84d5dc3d27505902506d8345423092e16cb6e_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5c7aa62bdf26f33565386e207a7a780dc324590b4054335691c0a4c6e15a425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7aa62bdf26f33565386e207a7a780dc324590b4054335691c0a4c6e15a425d->enter($__internal_5c7aa62bdf26f33565386e207a7a780dc324590b4054335691c0a4c6e15a425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0546ad6ca5aeb3caef2695240939783935d11a7bbd2b56cd7a7eff71d59f994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0546ad6ca5aeb3caef2695240939783935d11a7bbd2b56cd7a7eff71d59f994c->enter($__internal_0546ad6ca5aeb3caef2695240939783935d11a7bbd2b56cd7a7eff71d59f994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0546ad6ca5aeb3caef2695240939783935d11a7bbd2b56cd7a7eff71d59f994c->leave($__internal_0546ad6ca5aeb3caef2695240939783935d11a7bbd2b56cd7a7eff71d59f994c_prof);

        
        $__internal_5c7aa62bdf26f33565386e207a7a780dc324590b4054335691c0a4c6e15a425d->leave($__internal_5c7aa62bdf26f33565386e207a7a780dc324590b4054335691c0a4c6e15a425d_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0479fe3a8158f348b32b324503b6651ab458acdff6abc7e1e8289ab639b9de4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0479fe3a8158f348b32b324503b6651ab458acdff6abc7e1e8289ab639b9de4e->enter($__internal_0479fe3a8158f348b32b324503b6651ab458acdff6abc7e1e8289ab639b9de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_70f646f7e1fbba65a9deafd65cf1b732ccf886b255c9bcc246915a51d824745b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f646f7e1fbba65a9deafd65cf1b732ccf886b255c9bcc246915a51d824745b->enter($__internal_70f646f7e1fbba65a9deafd65cf1b732ccf886b255c9bcc246915a51d824745b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_70f646f7e1fbba65a9deafd65cf1b732ccf886b255c9bcc246915a51d824745b->leave($__internal_70f646f7e1fbba65a9deafd65cf1b732ccf886b255c9bcc246915a51d824745b_prof);

        
        $__internal_0479fe3a8158f348b32b324503b6651ab458acdff6abc7e1e8289ab639b9de4e->leave($__internal_0479fe3a8158f348b32b324503b6651ab458acdff6abc7e1e8289ab639b9de4e_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c52ed93b321c3416981cba956cf5e8e50ed98bac4c40e41fefb76408a696cbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52ed93b321c3416981cba956cf5e8e50ed98bac4c40e41fefb76408a696cbec->enter($__internal_c52ed93b321c3416981cba956cf5e8e50ed98bac4c40e41fefb76408a696cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b2eca1a90ba655b609c1af543406dce8f60356032277c3274790693a5d437df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2eca1a90ba655b609c1af543406dce8f60356032277c3274790693a5d437df2->enter($__internal_b2eca1a90ba655b609c1af543406dce8f60356032277c3274790693a5d437df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b2eca1a90ba655b609c1af543406dce8f60356032277c3274790693a5d437df2->leave($__internal_b2eca1a90ba655b609c1af543406dce8f60356032277c3274790693a5d437df2_prof);

        
        $__internal_c52ed93b321c3416981cba956cf5e8e50ed98bac4c40e41fefb76408a696cbec->leave($__internal_c52ed93b321c3416981cba956cf5e8e50ed98bac4c40e41fefb76408a696cbec_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c5c1d215d06fce03e716de71ac2f7cdbf40ed507f453c762b9030075c1ba31ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c1d215d06fce03e716de71ac2f7cdbf40ed507f453c762b9030075c1ba31ff->enter($__internal_c5c1d215d06fce03e716de71ac2f7cdbf40ed507f453c762b9030075c1ba31ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c1f20df5949fb83bf6bbecdb9767af21c82532e8e133a863de89b091d5432bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f20df5949fb83bf6bbecdb9767af21c82532e8e133a863de89b091d5432bf2->enter($__internal_c1f20df5949fb83bf6bbecdb9767af21c82532e8e133a863de89b091d5432bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_c1f20df5949fb83bf6bbecdb9767af21c82532e8e133a863de89b091d5432bf2->leave($__internal_c1f20df5949fb83bf6bbecdb9767af21c82532e8e133a863de89b091d5432bf2_prof);

        
        $__internal_c5c1d215d06fce03e716de71ac2f7cdbf40ed507f453c762b9030075c1ba31ff->leave($__internal_c5c1d215d06fce03e716de71ac2f7cdbf40ed507f453c762b9030075c1ba31ff_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_229b1686bd36228559091202f9930fe700d9fdafedb6ca8b9efa30918c273101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229b1686bd36228559091202f9930fe700d9fdafedb6ca8b9efa30918c273101->enter($__internal_229b1686bd36228559091202f9930fe700d9fdafedb6ca8b9efa30918c273101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e496d503ca08d8230317003aefee41d9e1d106cba43084640bbff449f04c1834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e496d503ca08d8230317003aefee41d9e1d106cba43084640bbff449f04c1834->enter($__internal_e496d503ca08d8230317003aefee41d9e1d106cba43084640bbff449f04c1834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_e496d503ca08d8230317003aefee41d9e1d106cba43084640bbff449f04c1834->leave($__internal_e496d503ca08d8230317003aefee41d9e1d106cba43084640bbff449f04c1834_prof);

        
        $__internal_229b1686bd36228559091202f9930fe700d9fdafedb6ca8b9efa30918c273101->leave($__internal_229b1686bd36228559091202f9930fe700d9fdafedb6ca8b9efa30918c273101_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0d5e8334b64f7a10bde5565c161a1164623bfe2516c5a38882d2f73ae6cb5964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5e8334b64f7a10bde5565c161a1164623bfe2516c5a38882d2f73ae6cb5964->enter($__internal_0d5e8334b64f7a10bde5565c161a1164623bfe2516c5a38882d2f73ae6cb5964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a0afc536ce16191ef24694a30ea98d5ac9288e9b308b27d2d7546a894a04d355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0afc536ce16191ef24694a30ea98d5ac9288e9b308b27d2d7546a894a04d355->enter($__internal_a0afc536ce16191ef24694a30ea98d5ac9288e9b308b27d2d7546a894a04d355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a0afc536ce16191ef24694a30ea98d5ac9288e9b308b27d2d7546a894a04d355->leave($__internal_a0afc536ce16191ef24694a30ea98d5ac9288e9b308b27d2d7546a894a04d355_prof);

        
        $__internal_0d5e8334b64f7a10bde5565c161a1164623bfe2516c5a38882d2f73ae6cb5964->leave($__internal_0d5e8334b64f7a10bde5565c161a1164623bfe2516c5a38882d2f73ae6cb5964_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
