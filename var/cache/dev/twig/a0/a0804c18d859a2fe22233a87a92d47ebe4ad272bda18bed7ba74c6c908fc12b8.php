<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_c4ebd60b0878e2bca80a6a62981f24ec918ac1c41006c028160ce41778b87b2f extends Twig_Template
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
        $__internal_12ed728b851fd6ca5f64432d9e2224d02ea8fbdb8c85c89519df2de13985af2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ed728b851fd6ca5f64432d9e2224d02ea8fbdb8c85c89519df2de13985af2b->enter($__internal_12ed728b851fd6ca5f64432d9e2224d02ea8fbdb8c85c89519df2de13985af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_2290fc0791be6b95403df09859cbf58458264377d92dafd84c9d868cc60136c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2290fc0791be6b95403df09859cbf58458264377d92dafd84c9d868cc60136c9->enter($__internal_2290fc0791be6b95403df09859cbf58458264377d92dafd84c9d868cc60136c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ed728b851fd6ca5f64432d9e2224d02ea8fbdb8c85c89519df2de13985af2b->leave($__internal_12ed728b851fd6ca5f64432d9e2224d02ea8fbdb8c85c89519df2de13985af2b_prof);

        
        $__internal_2290fc0791be6b95403df09859cbf58458264377d92dafd84c9d868cc60136c9->leave($__internal_2290fc0791be6b95403df09859cbf58458264377d92dafd84c9d868cc60136c9_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_83a8264e91e709f793ba9f2d52c928b344044af356558d85a04e2ae621f16c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a8264e91e709f793ba9f2d52c928b344044af356558d85a04e2ae621f16c80->enter($__internal_83a8264e91e709f793ba9f2d52c928b344044af356558d85a04e2ae621f16c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5c9cae689182dcfc4a873fa81f3e05731e97a63989f586f0c048f02a9fe4c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9cae689182dcfc4a873fa81f3e05731e97a63989f586f0c048f02a9fe4c5c5->enter($__internal_5c9cae689182dcfc4a873fa81f3e05731e97a63989f586f0c048f02a9fe4c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5c9cae689182dcfc4a873fa81f3e05731e97a63989f586f0c048f02a9fe4c5c5->leave($__internal_5c9cae689182dcfc4a873fa81f3e05731e97a63989f586f0c048f02a9fe4c5c5_prof);

        
        $__internal_83a8264e91e709f793ba9f2d52c928b344044af356558d85a04e2ae621f16c80->leave($__internal_83a8264e91e709f793ba9f2d52c928b344044af356558d85a04e2ae621f16c80_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_81b3812dde35cb3e5638be3e14e536249c6bcbd115921f91e14b1ea195075e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b3812dde35cb3e5638be3e14e536249c6bcbd115921f91e14b1ea195075e53->enter($__internal_81b3812dde35cb3e5638be3e14e536249c6bcbd115921f91e14b1ea195075e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7d3046beb5308c32e506cd4862efc4cf57975e19fae434779ce7be62dce05ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3046beb5308c32e506cd4862efc4cf57975e19fae434779ce7be62dce05ade->enter($__internal_7d3046beb5308c32e506cd4862efc4cf57975e19fae434779ce7be62dce05ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7d3046beb5308c32e506cd4862efc4cf57975e19fae434779ce7be62dce05ade->leave($__internal_7d3046beb5308c32e506cd4862efc4cf57975e19fae434779ce7be62dce05ade_prof);

        
        $__internal_81b3812dde35cb3e5638be3e14e536249c6bcbd115921f91e14b1ea195075e53->leave($__internal_81b3812dde35cb3e5638be3e14e536249c6bcbd115921f91e14b1ea195075e53_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ce67b12f99adbf5b6e3e9e539e41030409f30836dc9a4cdd66a8ee641e57368c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce67b12f99adbf5b6e3e9e539e41030409f30836dc9a4cdd66a8ee641e57368c->enter($__internal_ce67b12f99adbf5b6e3e9e539e41030409f30836dc9a4cdd66a8ee641e57368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_330d0ff2c7223b743bb15d4f3fb807c3bc99f86ab3fadeac3949a4932f3f0c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330d0ff2c7223b743bb15d4f3fb807c3bc99f86ab3fadeac3949a4932f3f0c26->enter($__internal_330d0ff2c7223b743bb15d4f3fb807c3bc99f86ab3fadeac3949a4932f3f0c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_330d0ff2c7223b743bb15d4f3fb807c3bc99f86ab3fadeac3949a4932f3f0c26->leave($__internal_330d0ff2c7223b743bb15d4f3fb807c3bc99f86ab3fadeac3949a4932f3f0c26_prof);

        
        $__internal_ce67b12f99adbf5b6e3e9e539e41030409f30836dc9a4cdd66a8ee641e57368c->leave($__internal_ce67b12f99adbf5b6e3e9e539e41030409f30836dc9a4cdd66a8ee641e57368c_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_05014947a638e039081e44dbe088fa06cd331fe8b858284f17a030930959a7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05014947a638e039081e44dbe088fa06cd331fe8b858284f17a030930959a7d1->enter($__internal_05014947a638e039081e44dbe088fa06cd331fe8b858284f17a030930959a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6777eb1b3f233e6be11f87e2368a58f11f9b400a5978bdd9759df3cf9d21be58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6777eb1b3f233e6be11f87e2368a58f11f9b400a5978bdd9759df3cf9d21be58->enter($__internal_6777eb1b3f233e6be11f87e2368a58f11f9b400a5978bdd9759df3cf9d21be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_6777eb1b3f233e6be11f87e2368a58f11f9b400a5978bdd9759df3cf9d21be58->leave($__internal_6777eb1b3f233e6be11f87e2368a58f11f9b400a5978bdd9759df3cf9d21be58_prof);

        
        $__internal_05014947a638e039081e44dbe088fa06cd331fe8b858284f17a030930959a7d1->leave($__internal_05014947a638e039081e44dbe088fa06cd331fe8b858284f17a030930959a7d1_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f1922661100d7404e9bf5e14e7100c4879c500e5fe9892263d06f5118d1854b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1922661100d7404e9bf5e14e7100c4879c500e5fe9892263d06f5118d1854b5->enter($__internal_f1922661100d7404e9bf5e14e7100c4879c500e5fe9892263d06f5118d1854b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cb3dd557c5bbfd3f42d71d251c0c9d109fa43f6085aece628a5b1f060df1bc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3dd557c5bbfd3f42d71d251c0c9d109fa43f6085aece628a5b1f060df1bc73->enter($__internal_cb3dd557c5bbfd3f42d71d251c0c9d109fa43f6085aece628a5b1f060df1bc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_cb3dd557c5bbfd3f42d71d251c0c9d109fa43f6085aece628a5b1f060df1bc73->leave($__internal_cb3dd557c5bbfd3f42d71d251c0c9d109fa43f6085aece628a5b1f060df1bc73_prof);

        
        $__internal_f1922661100d7404e9bf5e14e7100c4879c500e5fe9892263d06f5118d1854b5->leave($__internal_f1922661100d7404e9bf5e14e7100c4879c500e5fe9892263d06f5118d1854b5_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_100e07935bf893f232f0bd5fbb7bb8bbfbccb62e56e2b77784987d50af5b9521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100e07935bf893f232f0bd5fbb7bb8bbfbccb62e56e2b77784987d50af5b9521->enter($__internal_100e07935bf893f232f0bd5fbb7bb8bbfbccb62e56e2b77784987d50af5b9521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e2f1e27de2c4813893667de7b85d3abe26d695c65809bb21bbdc2c00c14dd957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f1e27de2c4813893667de7b85d3abe26d695c65809bb21bbdc2c00c14dd957->enter($__internal_e2f1e27de2c4813893667de7b85d3abe26d695c65809bb21bbdc2c00c14dd957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_e2f1e27de2c4813893667de7b85d3abe26d695c65809bb21bbdc2c00c14dd957->leave($__internal_e2f1e27de2c4813893667de7b85d3abe26d695c65809bb21bbdc2c00c14dd957_prof);

        
        $__internal_100e07935bf893f232f0bd5fbb7bb8bbfbccb62e56e2b77784987d50af5b9521->leave($__internal_100e07935bf893f232f0bd5fbb7bb8bbfbccb62e56e2b77784987d50af5b9521_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_84a9dc7b3fab669dbd0e69efdc1274ac8d46c26ec7e63a63b88cd35cc16a7e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a9dc7b3fab669dbd0e69efdc1274ac8d46c26ec7e63a63b88cd35cc16a7e35->enter($__internal_84a9dc7b3fab669dbd0e69efdc1274ac8d46c26ec7e63a63b88cd35cc16a7e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_11b0aa13512cb61c01dd46a55bd991687c67dd4b4db6fd0c44be40749ea9fa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b0aa13512cb61c01dd46a55bd991687c67dd4b4db6fd0c44be40749ea9fa93->enter($__internal_11b0aa13512cb61c01dd46a55bd991687c67dd4b4db6fd0c44be40749ea9fa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_11b0aa13512cb61c01dd46a55bd991687c67dd4b4db6fd0c44be40749ea9fa93->leave($__internal_11b0aa13512cb61c01dd46a55bd991687c67dd4b4db6fd0c44be40749ea9fa93_prof);

        
        $__internal_84a9dc7b3fab669dbd0e69efdc1274ac8d46c26ec7e63a63b88cd35cc16a7e35->leave($__internal_84a9dc7b3fab669dbd0e69efdc1274ac8d46c26ec7e63a63b88cd35cc16a7e35_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_dd6290aa13a9a56cd6ebe95706e72f0289b952ed079ce43974950913f8098f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6290aa13a9a56cd6ebe95706e72f0289b952ed079ce43974950913f8098f9d->enter($__internal_dd6290aa13a9a56cd6ebe95706e72f0289b952ed079ce43974950913f8098f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3de8e43545967cf6e675f39b664a8ab722943ecf818adbb1bc7ddd5ec9655c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de8e43545967cf6e675f39b664a8ab722943ecf818adbb1bc7ddd5ec9655c2d->enter($__internal_3de8e43545967cf6e675f39b664a8ab722943ecf818adbb1bc7ddd5ec9655c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_3de8e43545967cf6e675f39b664a8ab722943ecf818adbb1bc7ddd5ec9655c2d->leave($__internal_3de8e43545967cf6e675f39b664a8ab722943ecf818adbb1bc7ddd5ec9655c2d_prof);

        
        $__internal_dd6290aa13a9a56cd6ebe95706e72f0289b952ed079ce43974950913f8098f9d->leave($__internal_dd6290aa13a9a56cd6ebe95706e72f0289b952ed079ce43974950913f8098f9d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1019247839936c20df2ebd1cc65b8460f291cabfee1427b9dacb43eed11c155b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1019247839936c20df2ebd1cc65b8460f291cabfee1427b9dacb43eed11c155b->enter($__internal_1019247839936c20df2ebd1cc65b8460f291cabfee1427b9dacb43eed11c155b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9cd76f542539ceac17c4f4443cc02721992e7d2c56de11caac7e5e277cc4b4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd76f542539ceac17c4f4443cc02721992e7d2c56de11caac7e5e277cc4b4b0->enter($__internal_9cd76f542539ceac17c4f4443cc02721992e7d2c56de11caac7e5e277cc4b4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_9cd76f542539ceac17c4f4443cc02721992e7d2c56de11caac7e5e277cc4b4b0->leave($__internal_9cd76f542539ceac17c4f4443cc02721992e7d2c56de11caac7e5e277cc4b4b0_prof);

        
        $__internal_1019247839936c20df2ebd1cc65b8460f291cabfee1427b9dacb43eed11c155b->leave($__internal_1019247839936c20df2ebd1cc65b8460f291cabfee1427b9dacb43eed11c155b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_629bd6c292baaa891c787e0529d8075f2c2282c9dc1341922d30c7fa347481c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629bd6c292baaa891c787e0529d8075f2c2282c9dc1341922d30c7fa347481c8->enter($__internal_629bd6c292baaa891c787e0529d8075f2c2282c9dc1341922d30c7fa347481c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_df87b5d6a9a0945484364b827bc28fd7056ecb40971a5dd2219bf4e802c6794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df87b5d6a9a0945484364b827bc28fd7056ecb40971a5dd2219bf4e802c6794c->enter($__internal_df87b5d6a9a0945484364b827bc28fd7056ecb40971a5dd2219bf4e802c6794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_df87b5d6a9a0945484364b827bc28fd7056ecb40971a5dd2219bf4e802c6794c->leave($__internal_df87b5d6a9a0945484364b827bc28fd7056ecb40971a5dd2219bf4e802c6794c_prof);

        
        $__internal_629bd6c292baaa891c787e0529d8075f2c2282c9dc1341922d30c7fa347481c8->leave($__internal_629bd6c292baaa891c787e0529d8075f2c2282c9dc1341922d30c7fa347481c8_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2684d18d7e887f46f2628570235eef8e174bbf0b916885435520bd5378eff156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2684d18d7e887f46f2628570235eef8e174bbf0b916885435520bd5378eff156->enter($__internal_2684d18d7e887f46f2628570235eef8e174bbf0b916885435520bd5378eff156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_cadecbe04cbe4c66650ea1f98ece8cc1f99c6e40dcdbe55bd95d0dd1cfdf6030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadecbe04cbe4c66650ea1f98ece8cc1f99c6e40dcdbe55bd95d0dd1cfdf6030->enter($__internal_cadecbe04cbe4c66650ea1f98ece8cc1f99c6e40dcdbe55bd95d0dd1cfdf6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_cadecbe04cbe4c66650ea1f98ece8cc1f99c6e40dcdbe55bd95d0dd1cfdf6030->leave($__internal_cadecbe04cbe4c66650ea1f98ece8cc1f99c6e40dcdbe55bd95d0dd1cfdf6030_prof);

        
        $__internal_2684d18d7e887f46f2628570235eef8e174bbf0b916885435520bd5378eff156->leave($__internal_2684d18d7e887f46f2628570235eef8e174bbf0b916885435520bd5378eff156_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d0e1d24ffa74f93c2b2a88a2c63557455d7fadc1911eb959df0854be70a8d85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e1d24ffa74f93c2b2a88a2c63557455d7fadc1911eb959df0854be70a8d85e->enter($__internal_d0e1d24ffa74f93c2b2a88a2c63557455d7fadc1911eb959df0854be70a8d85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_9c26a4695ed3f4ae867f5e49c280e26a22a55c5354609d64a29e42e8e58cd085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c26a4695ed3f4ae867f5e49c280e26a22a55c5354609d64a29e42e8e58cd085->enter($__internal_9c26a4695ed3f4ae867f5e49c280e26a22a55c5354609d64a29e42e8e58cd085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_9c26a4695ed3f4ae867f5e49c280e26a22a55c5354609d64a29e42e8e58cd085->leave($__internal_9c26a4695ed3f4ae867f5e49c280e26a22a55c5354609d64a29e42e8e58cd085_prof);

        
        $__internal_d0e1d24ffa74f93c2b2a88a2c63557455d7fadc1911eb959df0854be70a8d85e->leave($__internal_d0e1d24ffa74f93c2b2a88a2c63557455d7fadc1911eb959df0854be70a8d85e_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2ef16453cbb973a9c51b67f5f3e50901d6d7a551fb8fed5ed401d005f9e835a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef16453cbb973a9c51b67f5f3e50901d6d7a551fb8fed5ed401d005f9e835a2->enter($__internal_2ef16453cbb973a9c51b67f5f3e50901d6d7a551fb8fed5ed401d005f9e835a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c2cfd0865268c93816ff603f1572a8d9fb9169295c26633e7e4c8521639c70fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cfd0865268c93816ff603f1572a8d9fb9169295c26633e7e4c8521639c70fb->enter($__internal_c2cfd0865268c93816ff603f1572a8d9fb9169295c26633e7e4c8521639c70fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c2cfd0865268c93816ff603f1572a8d9fb9169295c26633e7e4c8521639c70fb->leave($__internal_c2cfd0865268c93816ff603f1572a8d9fb9169295c26633e7e4c8521639c70fb_prof);

        
        $__internal_2ef16453cbb973a9c51b67f5f3e50901d6d7a551fb8fed5ed401d005f9e835a2->leave($__internal_2ef16453cbb973a9c51b67f5f3e50901d6d7a551fb8fed5ed401d005f9e835a2_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_aab74a97dc07ea3066af397aeae848910a9e19b241e40488b404ea3aa672ba78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab74a97dc07ea3066af397aeae848910a9e19b241e40488b404ea3aa672ba78->enter($__internal_aab74a97dc07ea3066af397aeae848910a9e19b241e40488b404ea3aa672ba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_739254efcbc41461ac6ca3a71d4df6f39861aad0fd9bc97d86969db660e3171f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739254efcbc41461ac6ca3a71d4df6f39861aad0fd9bc97d86969db660e3171f->enter($__internal_739254efcbc41461ac6ca3a71d4df6f39861aad0fd9bc97d86969db660e3171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_739254efcbc41461ac6ca3a71d4df6f39861aad0fd9bc97d86969db660e3171f->leave($__internal_739254efcbc41461ac6ca3a71d4df6f39861aad0fd9bc97d86969db660e3171f_prof);

        
        $__internal_aab74a97dc07ea3066af397aeae848910a9e19b241e40488b404ea3aa672ba78->leave($__internal_aab74a97dc07ea3066af397aeae848910a9e19b241e40488b404ea3aa672ba78_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ac46d1a5f97d3e1160b9018e6e3a9e236839f1c7bb63d6c6300a7308c4662b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac46d1a5f97d3e1160b9018e6e3a9e236839f1c7bb63d6c6300a7308c4662b15->enter($__internal_ac46d1a5f97d3e1160b9018e6e3a9e236839f1c7bb63d6c6300a7308c4662b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_783de1a2be178ff9614ae59cf28ad2320dc036fb235196751e054a823debb631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783de1a2be178ff9614ae59cf28ad2320dc036fb235196751e054a823debb631->enter($__internal_783de1a2be178ff9614ae59cf28ad2320dc036fb235196751e054a823debb631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_783de1a2be178ff9614ae59cf28ad2320dc036fb235196751e054a823debb631->leave($__internal_783de1a2be178ff9614ae59cf28ad2320dc036fb235196751e054a823debb631_prof);

        
        $__internal_ac46d1a5f97d3e1160b9018e6e3a9e236839f1c7bb63d6c6300a7308c4662b15->leave($__internal_ac46d1a5f97d3e1160b9018e6e3a9e236839f1c7bb63d6c6300a7308c4662b15_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2d7a8b9f54923536b316aab96987dbe608e766ff74ce2e68f74101ef4ee143d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7a8b9f54923536b316aab96987dbe608e766ff74ce2e68f74101ef4ee143d3->enter($__internal_2d7a8b9f54923536b316aab96987dbe608e766ff74ce2e68f74101ef4ee143d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8176df0ba9261b93a4c11d90e12933564892bfa36d7cb77c7332acb67cdab037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8176df0ba9261b93a4c11d90e12933564892bfa36d7cb77c7332acb67cdab037->enter($__internal_8176df0ba9261b93a4c11d90e12933564892bfa36d7cb77c7332acb67cdab037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8176df0ba9261b93a4c11d90e12933564892bfa36d7cb77c7332acb67cdab037->leave($__internal_8176df0ba9261b93a4c11d90e12933564892bfa36d7cb77c7332acb67cdab037_prof);

        
        $__internal_2d7a8b9f54923536b316aab96987dbe608e766ff74ce2e68f74101ef4ee143d3->leave($__internal_2d7a8b9f54923536b316aab96987dbe608e766ff74ce2e68f74101ef4ee143d3_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a58ca3ef3efd6ac1744af84ea0cf94a5dec91ac1d296e55d7c6e7a37c728b9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58ca3ef3efd6ac1744af84ea0cf94a5dec91ac1d296e55d7c6e7a37c728b9f2->enter($__internal_a58ca3ef3efd6ac1744af84ea0cf94a5dec91ac1d296e55d7c6e7a37c728b9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d624ad4cc60b1b30f96b5085b0c45943562d480d41df92d1bf15ca126cf16460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d624ad4cc60b1b30f96b5085b0c45943562d480d41df92d1bf15ca126cf16460->enter($__internal_d624ad4cc60b1b30f96b5085b0c45943562d480d41df92d1bf15ca126cf16460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d624ad4cc60b1b30f96b5085b0c45943562d480d41df92d1bf15ca126cf16460->leave($__internal_d624ad4cc60b1b30f96b5085b0c45943562d480d41df92d1bf15ca126cf16460_prof);

        
        $__internal_a58ca3ef3efd6ac1744af84ea0cf94a5dec91ac1d296e55d7c6e7a37c728b9f2->leave($__internal_a58ca3ef3efd6ac1744af84ea0cf94a5dec91ac1d296e55d7c6e7a37c728b9f2_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_03aa61eee95b471b5f6ff16c35a510246b3cf0d8d38733cc7b6bb3fa6c5aea45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03aa61eee95b471b5f6ff16c35a510246b3cf0d8d38733cc7b6bb3fa6c5aea45->enter($__internal_03aa61eee95b471b5f6ff16c35a510246b3cf0d8d38733cc7b6bb3fa6c5aea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f4e177b9fccfb0f5de41299e52e11160fe39ce84424b3015998054062ad0d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e177b9fccfb0f5de41299e52e11160fe39ce84424b3015998054062ad0d031->enter($__internal_f4e177b9fccfb0f5de41299e52e11160fe39ce84424b3015998054062ad0d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f4e177b9fccfb0f5de41299e52e11160fe39ce84424b3015998054062ad0d031->leave($__internal_f4e177b9fccfb0f5de41299e52e11160fe39ce84424b3015998054062ad0d031_prof);

        
        $__internal_03aa61eee95b471b5f6ff16c35a510246b3cf0d8d38733cc7b6bb3fa6c5aea45->leave($__internal_03aa61eee95b471b5f6ff16c35a510246b3cf0d8d38733cc7b6bb3fa6c5aea45_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b73e197b10b6bf8392773fe895240e2bc03c9f936d74ebb3af5dfab866249ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73e197b10b6bf8392773fe895240e2bc03c9f936d74ebb3af5dfab866249ff9->enter($__internal_b73e197b10b6bf8392773fe895240e2bc03c9f936d74ebb3af5dfab866249ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d1afd47b2b944b6fea1da42e6a20499f8c76e99ec74484c7c8ae1e792ce18f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1afd47b2b944b6fea1da42e6a20499f8c76e99ec74484c7c8ae1e792ce18f7c->enter($__internal_d1afd47b2b944b6fea1da42e6a20499f8c76e99ec74484c7c8ae1e792ce18f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d1afd47b2b944b6fea1da42e6a20499f8c76e99ec74484c7c8ae1e792ce18f7c->leave($__internal_d1afd47b2b944b6fea1da42e6a20499f8c76e99ec74484c7c8ae1e792ce18f7c_prof);

        
        $__internal_b73e197b10b6bf8392773fe895240e2bc03c9f936d74ebb3af5dfab866249ff9->leave($__internal_b73e197b10b6bf8392773fe895240e2bc03c9f936d74ebb3af5dfab866249ff9_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9ec3adb6dde9eaa3381f311c27c2aacf1bf5c6b718a3bc1abfe3702eefbc1792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec3adb6dde9eaa3381f311c27c2aacf1bf5c6b718a3bc1abfe3702eefbc1792->enter($__internal_9ec3adb6dde9eaa3381f311c27c2aacf1bf5c6b718a3bc1abfe3702eefbc1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8e0a5e1203f499ddba419908b2f67b083d795272cd5a564eed41d7a060e1d11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0a5e1203f499ddba419908b2f67b083d795272cd5a564eed41d7a060e1d11d->enter($__internal_8e0a5e1203f499ddba419908b2f67b083d795272cd5a564eed41d7a060e1d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8e0a5e1203f499ddba419908b2f67b083d795272cd5a564eed41d7a060e1d11d->leave($__internal_8e0a5e1203f499ddba419908b2f67b083d795272cd5a564eed41d7a060e1d11d_prof);

        
        $__internal_9ec3adb6dde9eaa3381f311c27c2aacf1bf5c6b718a3bc1abfe3702eefbc1792->leave($__internal_9ec3adb6dde9eaa3381f311c27c2aacf1bf5c6b718a3bc1abfe3702eefbc1792_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d56405c1f93c50c08c0b1ff304b38349cde21a3c9906aa2d59bb3881c42c19b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56405c1f93c50c08c0b1ff304b38349cde21a3c9906aa2d59bb3881c42c19b7->enter($__internal_d56405c1f93c50c08c0b1ff304b38349cde21a3c9906aa2d59bb3881c42c19b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_62d07b49b9f8d63acae93a0e2aeef689830599a6255a3b2689986c9c11d66468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d07b49b9f8d63acae93a0e2aeef689830599a6255a3b2689986c9c11d66468->enter($__internal_62d07b49b9f8d63acae93a0e2aeef689830599a6255a3b2689986c9c11d66468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_62d07b49b9f8d63acae93a0e2aeef689830599a6255a3b2689986c9c11d66468->leave($__internal_62d07b49b9f8d63acae93a0e2aeef689830599a6255a3b2689986c9c11d66468_prof);

        
        $__internal_d56405c1f93c50c08c0b1ff304b38349cde21a3c9906aa2d59bb3881c42c19b7->leave($__internal_d56405c1f93c50c08c0b1ff304b38349cde21a3c9906aa2d59bb3881c42c19b7_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4c5f81c978468c66a49dc2d51adaa70bd355b12b1da9c2996a2f0d2eaf4f3468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5f81c978468c66a49dc2d51adaa70bd355b12b1da9c2996a2f0d2eaf4f3468->enter($__internal_4c5f81c978468c66a49dc2d51adaa70bd355b12b1da9c2996a2f0d2eaf4f3468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_72ec13d0614ef7ddb3fcf75dec8f8bd3382524798d8ac3e108ce820866c1746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ec13d0614ef7ddb3fcf75dec8f8bd3382524798d8ac3e108ce820866c1746e->enter($__internal_72ec13d0614ef7ddb3fcf75dec8f8bd3382524798d8ac3e108ce820866c1746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_72ec13d0614ef7ddb3fcf75dec8f8bd3382524798d8ac3e108ce820866c1746e->leave($__internal_72ec13d0614ef7ddb3fcf75dec8f8bd3382524798d8ac3e108ce820866c1746e_prof);

        
        $__internal_4c5f81c978468c66a49dc2d51adaa70bd355b12b1da9c2996a2f0d2eaf4f3468->leave($__internal_4c5f81c978468c66a49dc2d51adaa70bd355b12b1da9c2996a2f0d2eaf4f3468_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c212acad852c9e923f5e2e9bf5947788d87c87f565887ebc2629b2d0a3edcd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c212acad852c9e923f5e2e9bf5947788d87c87f565887ebc2629b2d0a3edcd2e->enter($__internal_c212acad852c9e923f5e2e9bf5947788d87c87f565887ebc2629b2d0a3edcd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c8ee888083669a88d6a8358988f3d64a96b7e54ab90befa689d955ba72a47adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ee888083669a88d6a8358988f3d64a96b7e54ab90befa689d955ba72a47adf->enter($__internal_c8ee888083669a88d6a8358988f3d64a96b7e54ab90befa689d955ba72a47adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c8ee888083669a88d6a8358988f3d64a96b7e54ab90befa689d955ba72a47adf->leave($__internal_c8ee888083669a88d6a8358988f3d64a96b7e54ab90befa689d955ba72a47adf_prof);

        
        $__internal_c212acad852c9e923f5e2e9bf5947788d87c87f565887ebc2629b2d0a3edcd2e->leave($__internal_c212acad852c9e923f5e2e9bf5947788d87c87f565887ebc2629b2d0a3edcd2e_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_530aa89854e18e2a00fb8cfb374b2940c904488274ecc782f884ed684b0b7190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530aa89854e18e2a00fb8cfb374b2940c904488274ecc782f884ed684b0b7190->enter($__internal_530aa89854e18e2a00fb8cfb374b2940c904488274ecc782f884ed684b0b7190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_77a383b3be587f2be3d406217b15ba95e195ebc5f4f394db444f8b189bbb3a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a383b3be587f2be3d406217b15ba95e195ebc5f4f394db444f8b189bbb3a5a->enter($__internal_77a383b3be587f2be3d406217b15ba95e195ebc5f4f394db444f8b189bbb3a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_77a383b3be587f2be3d406217b15ba95e195ebc5f4f394db444f8b189bbb3a5a->leave($__internal_77a383b3be587f2be3d406217b15ba95e195ebc5f4f394db444f8b189bbb3a5a_prof);

        
        $__internal_530aa89854e18e2a00fb8cfb374b2940c904488274ecc782f884ed684b0b7190->leave($__internal_530aa89854e18e2a00fb8cfb374b2940c904488274ecc782f884ed684b0b7190_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6d63f3ab059bda1f386bd78bfb7e3951ed13ec13119591ea470a579a50bd2c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d63f3ab059bda1f386bd78bfb7e3951ed13ec13119591ea470a579a50bd2c10->enter($__internal_6d63f3ab059bda1f386bd78bfb7e3951ed13ec13119591ea470a579a50bd2c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2e50eab92b8ba7a2d90bb311b13b288c37833965938e1dd4b1803be2b74a680e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e50eab92b8ba7a2d90bb311b13b288c37833965938e1dd4b1803be2b74a680e->enter($__internal_2e50eab92b8ba7a2d90bb311b13b288c37833965938e1dd4b1803be2b74a680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2e50eab92b8ba7a2d90bb311b13b288c37833965938e1dd4b1803be2b74a680e->leave($__internal_2e50eab92b8ba7a2d90bb311b13b288c37833965938e1dd4b1803be2b74a680e_prof);

        
        $__internal_6d63f3ab059bda1f386bd78bfb7e3951ed13ec13119591ea470a579a50bd2c10->leave($__internal_6d63f3ab059bda1f386bd78bfb7e3951ed13ec13119591ea470a579a50bd2c10_prof);

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
", "foundation_5_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
