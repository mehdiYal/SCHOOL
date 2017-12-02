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
        $__internal_544b32d8d61370aef4de07df13eb9fb28420878eb5d288819d63977a906262e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544b32d8d61370aef4de07df13eb9fb28420878eb5d288819d63977a906262e2->enter($__internal_544b32d8d61370aef4de07df13eb9fb28420878eb5d288819d63977a906262e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_7cde770a0f530431121b5733a219174dd6c0c6d69b93723497b842b33f0503e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cde770a0f530431121b5733a219174dd6c0c6d69b93723497b842b33f0503e9->enter($__internal_7cde770a0f530431121b5733a219174dd6c0c6d69b93723497b842b33f0503e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544b32d8d61370aef4de07df13eb9fb28420878eb5d288819d63977a906262e2->leave($__internal_544b32d8d61370aef4de07df13eb9fb28420878eb5d288819d63977a906262e2_prof);

        
        $__internal_7cde770a0f530431121b5733a219174dd6c0c6d69b93723497b842b33f0503e9->leave($__internal_7cde770a0f530431121b5733a219174dd6c0c6d69b93723497b842b33f0503e9_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2295226a109223866d709983b82c6812dc0440b16e38d5f565a3d21f4f580c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2295226a109223866d709983b82c6812dc0440b16e38d5f565a3d21f4f580c0f->enter($__internal_2295226a109223866d709983b82c6812dc0440b16e38d5f565a3d21f4f580c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bf222f75a2387f736361499d0cbbd8c05bab579257daa7d2db180ddc86a6ebee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf222f75a2387f736361499d0cbbd8c05bab579257daa7d2db180ddc86a6ebee->enter($__internal_bf222f75a2387f736361499d0cbbd8c05bab579257daa7d2db180ddc86a6ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf222f75a2387f736361499d0cbbd8c05bab579257daa7d2db180ddc86a6ebee->leave($__internal_bf222f75a2387f736361499d0cbbd8c05bab579257daa7d2db180ddc86a6ebee_prof);

        
        $__internal_2295226a109223866d709983b82c6812dc0440b16e38d5f565a3d21f4f580c0f->leave($__internal_2295226a109223866d709983b82c6812dc0440b16e38d5f565a3d21f4f580c0f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dfdc0490b522c51f420f3fa2c0664abfc139453122d431e792368587fb054de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdc0490b522c51f420f3fa2c0664abfc139453122d431e792368587fb054de4->enter($__internal_dfdc0490b522c51f420f3fa2c0664abfc139453122d431e792368587fb054de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_203e98475bfbf41d33d71c4ddbd9be6f23124f5a7a5e5df2ee45343542b672f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203e98475bfbf41d33d71c4ddbd9be6f23124f5a7a5e5df2ee45343542b672f0->enter($__internal_203e98475bfbf41d33d71c4ddbd9be6f23124f5a7a5e5df2ee45343542b672f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_203e98475bfbf41d33d71c4ddbd9be6f23124f5a7a5e5df2ee45343542b672f0->leave($__internal_203e98475bfbf41d33d71c4ddbd9be6f23124f5a7a5e5df2ee45343542b672f0_prof);

        
        $__internal_dfdc0490b522c51f420f3fa2c0664abfc139453122d431e792368587fb054de4->leave($__internal_dfdc0490b522c51f420f3fa2c0664abfc139453122d431e792368587fb054de4_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_de3068b5d8b895e9dc480cbf25ab1342a04f9a44a43408af267cdb4a001aa08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3068b5d8b895e9dc480cbf25ab1342a04f9a44a43408af267cdb4a001aa08d->enter($__internal_de3068b5d8b895e9dc480cbf25ab1342a04f9a44a43408af267cdb4a001aa08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5d9c83d5a2d13d11285f5b2f61ac3f79da74ccc91f924edd337402e241623cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9c83d5a2d13d11285f5b2f61ac3f79da74ccc91f924edd337402e241623cdf->enter($__internal_5d9c83d5a2d13d11285f5b2f61ac3f79da74ccc91f924edd337402e241623cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5d9c83d5a2d13d11285f5b2f61ac3f79da74ccc91f924edd337402e241623cdf->leave($__internal_5d9c83d5a2d13d11285f5b2f61ac3f79da74ccc91f924edd337402e241623cdf_prof);

        
        $__internal_de3068b5d8b895e9dc480cbf25ab1342a04f9a44a43408af267cdb4a001aa08d->leave($__internal_de3068b5d8b895e9dc480cbf25ab1342a04f9a44a43408af267cdb4a001aa08d_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_11c644a461cd4bc3d9294bb391d7a3d897ca6755694cff0607671c28a1d35ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c644a461cd4bc3d9294bb391d7a3d897ca6755694cff0607671c28a1d35ef9->enter($__internal_11c644a461cd4bc3d9294bb391d7a3d897ca6755694cff0607671c28a1d35ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4a2093b3bdd6aca0256bb11a8e048c02a43bc9d88498e7e71b40e672976b659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2093b3bdd6aca0256bb11a8e048c02a43bc9d88498e7e71b40e672976b659f->enter($__internal_4a2093b3bdd6aca0256bb11a8e048c02a43bc9d88498e7e71b40e672976b659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_4a2093b3bdd6aca0256bb11a8e048c02a43bc9d88498e7e71b40e672976b659f->leave($__internal_4a2093b3bdd6aca0256bb11a8e048c02a43bc9d88498e7e71b40e672976b659f_prof);

        
        $__internal_11c644a461cd4bc3d9294bb391d7a3d897ca6755694cff0607671c28a1d35ef9->leave($__internal_11c644a461cd4bc3d9294bb391d7a3d897ca6755694cff0607671c28a1d35ef9_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_72dad444b8f1a2c412caea036d4d507cefa297191e1c896ecb2e8f6cdd35c1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dad444b8f1a2c412caea036d4d507cefa297191e1c896ecb2e8f6cdd35c1b1->enter($__internal_72dad444b8f1a2c412caea036d4d507cefa297191e1c896ecb2e8f6cdd35c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_01ac4974592b7140624d861ac37d4fb4b5385ad90477959c0fab56bf44ed460d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ac4974592b7140624d861ac37d4fb4b5385ad90477959c0fab56bf44ed460d->enter($__internal_01ac4974592b7140624d861ac37d4fb4b5385ad90477959c0fab56bf44ed460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_01ac4974592b7140624d861ac37d4fb4b5385ad90477959c0fab56bf44ed460d->leave($__internal_01ac4974592b7140624d861ac37d4fb4b5385ad90477959c0fab56bf44ed460d_prof);

        
        $__internal_72dad444b8f1a2c412caea036d4d507cefa297191e1c896ecb2e8f6cdd35c1b1->leave($__internal_72dad444b8f1a2c412caea036d4d507cefa297191e1c896ecb2e8f6cdd35c1b1_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5e47b717a71f98e8be92bf40a357b13aef2b0aafc7e94746d7b16289fae387ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e47b717a71f98e8be92bf40a357b13aef2b0aafc7e94746d7b16289fae387ed->enter($__internal_5e47b717a71f98e8be92bf40a357b13aef2b0aafc7e94746d7b16289fae387ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d52fd11132f970fb4e36a7aac5bb479395c8dd864a73d9307ef6b36cb70178d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52fd11132f970fb4e36a7aac5bb479395c8dd864a73d9307ef6b36cb70178d6->enter($__internal_d52fd11132f970fb4e36a7aac5bb479395c8dd864a73d9307ef6b36cb70178d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_d52fd11132f970fb4e36a7aac5bb479395c8dd864a73d9307ef6b36cb70178d6->leave($__internal_d52fd11132f970fb4e36a7aac5bb479395c8dd864a73d9307ef6b36cb70178d6_prof);

        
        $__internal_5e47b717a71f98e8be92bf40a357b13aef2b0aafc7e94746d7b16289fae387ed->leave($__internal_5e47b717a71f98e8be92bf40a357b13aef2b0aafc7e94746d7b16289fae387ed_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_241cee9e9b398f425c72f75024d4daa86ed65a3725c66a2d454bc0f7185fd296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241cee9e9b398f425c72f75024d4daa86ed65a3725c66a2d454bc0f7185fd296->enter($__internal_241cee9e9b398f425c72f75024d4daa86ed65a3725c66a2d454bc0f7185fd296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a5326101299b595a30a0f8e4e4926c9a6c8ec491c63d8c9878dc8ab99d7ae111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5326101299b595a30a0f8e4e4926c9a6c8ec491c63d8c9878dc8ab99d7ae111->enter($__internal_a5326101299b595a30a0f8e4e4926c9a6c8ec491c63d8c9878dc8ab99d7ae111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_a5326101299b595a30a0f8e4e4926c9a6c8ec491c63d8c9878dc8ab99d7ae111->leave($__internal_a5326101299b595a30a0f8e4e4926c9a6c8ec491c63d8c9878dc8ab99d7ae111_prof);

        
        $__internal_241cee9e9b398f425c72f75024d4daa86ed65a3725c66a2d454bc0f7185fd296->leave($__internal_241cee9e9b398f425c72f75024d4daa86ed65a3725c66a2d454bc0f7185fd296_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d59f2a1187bc43528498b546e191059cc01e69bb023a65f2728b1d1e6c7be773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59f2a1187bc43528498b546e191059cc01e69bb023a65f2728b1d1e6c7be773->enter($__internal_d59f2a1187bc43528498b546e191059cc01e69bb023a65f2728b1d1e6c7be773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_633a1110d03576d31d2d1f3f9d8eebee6cdf9c02731507a1fc999a969a18ba1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a1110d03576d31d2d1f3f9d8eebee6cdf9c02731507a1fc999a969a18ba1a->enter($__internal_633a1110d03576d31d2d1f3f9d8eebee6cdf9c02731507a1fc999a969a18ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_633a1110d03576d31d2d1f3f9d8eebee6cdf9c02731507a1fc999a969a18ba1a->leave($__internal_633a1110d03576d31d2d1f3f9d8eebee6cdf9c02731507a1fc999a969a18ba1a_prof);

        
        $__internal_d59f2a1187bc43528498b546e191059cc01e69bb023a65f2728b1d1e6c7be773->leave($__internal_d59f2a1187bc43528498b546e191059cc01e69bb023a65f2728b1d1e6c7be773_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_949e52dc42d95c3f8d48ca6ff632d7b5888b03b1c44ba6ff5a639bc51a9cee65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949e52dc42d95c3f8d48ca6ff632d7b5888b03b1c44ba6ff5a639bc51a9cee65->enter($__internal_949e52dc42d95c3f8d48ca6ff632d7b5888b03b1c44ba6ff5a639bc51a9cee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ebb2c9f97ed9d6e66df699c9f53adbbef9a1e4958b0bda151682e97ff5f608d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb2c9f97ed9d6e66df699c9f53adbbef9a1e4958b0bda151682e97ff5f608d2->enter($__internal_ebb2c9f97ed9d6e66df699c9f53adbbef9a1e4958b0bda151682e97ff5f608d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_ebb2c9f97ed9d6e66df699c9f53adbbef9a1e4958b0bda151682e97ff5f608d2->leave($__internal_ebb2c9f97ed9d6e66df699c9f53adbbef9a1e4958b0bda151682e97ff5f608d2_prof);

        
        $__internal_949e52dc42d95c3f8d48ca6ff632d7b5888b03b1c44ba6ff5a639bc51a9cee65->leave($__internal_949e52dc42d95c3f8d48ca6ff632d7b5888b03b1c44ba6ff5a639bc51a9cee65_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_790a7df401ba24d8ea1f20ac36c60d6453b0ffa70d19b57120b1cfdeb1396f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790a7df401ba24d8ea1f20ac36c60d6453b0ffa70d19b57120b1cfdeb1396f45->enter($__internal_790a7df401ba24d8ea1f20ac36c60d6453b0ffa70d19b57120b1cfdeb1396f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d22e3b8a1233d8462b1317d3ae253ca58c31dd73e84bdf7712d9ba1661f6529e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22e3b8a1233d8462b1317d3ae253ca58c31dd73e84bdf7712d9ba1661f6529e->enter($__internal_d22e3b8a1233d8462b1317d3ae253ca58c31dd73e84bdf7712d9ba1661f6529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d22e3b8a1233d8462b1317d3ae253ca58c31dd73e84bdf7712d9ba1661f6529e->leave($__internal_d22e3b8a1233d8462b1317d3ae253ca58c31dd73e84bdf7712d9ba1661f6529e_prof);

        
        $__internal_790a7df401ba24d8ea1f20ac36c60d6453b0ffa70d19b57120b1cfdeb1396f45->leave($__internal_790a7df401ba24d8ea1f20ac36c60d6453b0ffa70d19b57120b1cfdeb1396f45_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_241cea46ca87e57cc8f0694d0309b92345632389c72ede9ffa979454df20005e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241cea46ca87e57cc8f0694d0309b92345632389c72ede9ffa979454df20005e->enter($__internal_241cea46ca87e57cc8f0694d0309b92345632389c72ede9ffa979454df20005e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b078c9a4a5fa9abbb82ffbe62d1370a60525d1f4097e943f73087646dd8a8a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b078c9a4a5fa9abbb82ffbe62d1370a60525d1f4097e943f73087646dd8a8a2c->enter($__internal_b078c9a4a5fa9abbb82ffbe62d1370a60525d1f4097e943f73087646dd8a8a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b078c9a4a5fa9abbb82ffbe62d1370a60525d1f4097e943f73087646dd8a8a2c->leave($__internal_b078c9a4a5fa9abbb82ffbe62d1370a60525d1f4097e943f73087646dd8a8a2c_prof);

        
        $__internal_241cea46ca87e57cc8f0694d0309b92345632389c72ede9ffa979454df20005e->leave($__internal_241cea46ca87e57cc8f0694d0309b92345632389c72ede9ffa979454df20005e_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a4d2d4a2cdb00222c55ffbab350e1622adb88501bd778a3a354dbb8fa669034d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d2d4a2cdb00222c55ffbab350e1622adb88501bd778a3a354dbb8fa669034d->enter($__internal_a4d2d4a2cdb00222c55ffbab350e1622adb88501bd778a3a354dbb8fa669034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f189ee34ae7b58b7d7fd8909aedec496c32c098d4a9fe672d5fd4ef9a823a679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f189ee34ae7b58b7d7fd8909aedec496c32c098d4a9fe672d5fd4ef9a823a679->enter($__internal_f189ee34ae7b58b7d7fd8909aedec496c32c098d4a9fe672d5fd4ef9a823a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f189ee34ae7b58b7d7fd8909aedec496c32c098d4a9fe672d5fd4ef9a823a679->leave($__internal_f189ee34ae7b58b7d7fd8909aedec496c32c098d4a9fe672d5fd4ef9a823a679_prof);

        
        $__internal_a4d2d4a2cdb00222c55ffbab350e1622adb88501bd778a3a354dbb8fa669034d->leave($__internal_a4d2d4a2cdb00222c55ffbab350e1622adb88501bd778a3a354dbb8fa669034d_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_67e61f997ac08ef710d9d9880cc0c49444dd486ad2436b1bbbd00df1e4f381a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e61f997ac08ef710d9d9880cc0c49444dd486ad2436b1bbbd00df1e4f381a6->enter($__internal_67e61f997ac08ef710d9d9880cc0c49444dd486ad2436b1bbbd00df1e4f381a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_775031b040845e2a465c7c2d27f2ad13adf9fcebdc22faf0b76c6ac93e76b7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775031b040845e2a465c7c2d27f2ad13adf9fcebdc22faf0b76c6ac93e76b7ee->enter($__internal_775031b040845e2a465c7c2d27f2ad13adf9fcebdc22faf0b76c6ac93e76b7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_775031b040845e2a465c7c2d27f2ad13adf9fcebdc22faf0b76c6ac93e76b7ee->leave($__internal_775031b040845e2a465c7c2d27f2ad13adf9fcebdc22faf0b76c6ac93e76b7ee_prof);

        
        $__internal_67e61f997ac08ef710d9d9880cc0c49444dd486ad2436b1bbbd00df1e4f381a6->leave($__internal_67e61f997ac08ef710d9d9880cc0c49444dd486ad2436b1bbbd00df1e4f381a6_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2cf2b1365fab185f02c414c2607c59d85a3cb9d3beb28f07595cb795829300e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf2b1365fab185f02c414c2607c59d85a3cb9d3beb28f07595cb795829300e8->enter($__internal_2cf2b1365fab185f02c414c2607c59d85a3cb9d3beb28f07595cb795829300e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f0234c81e4364832b28e3063c1a403be7c1f4b81861a64bc85683e2230a88306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0234c81e4364832b28e3063c1a403be7c1f4b81861a64bc85683e2230a88306->enter($__internal_f0234c81e4364832b28e3063c1a403be7c1f4b81861a64bc85683e2230a88306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_f0234c81e4364832b28e3063c1a403be7c1f4b81861a64bc85683e2230a88306->leave($__internal_f0234c81e4364832b28e3063c1a403be7c1f4b81861a64bc85683e2230a88306_prof);

        
        $__internal_2cf2b1365fab185f02c414c2607c59d85a3cb9d3beb28f07595cb795829300e8->leave($__internal_2cf2b1365fab185f02c414c2607c59d85a3cb9d3beb28f07595cb795829300e8_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_f9bb6fe7e818e38294d69e051f9431573ec2be0224a5f2018876ee309e9cdea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bb6fe7e818e38294d69e051f9431573ec2be0224a5f2018876ee309e9cdea0->enter($__internal_f9bb6fe7e818e38294d69e051f9431573ec2be0224a5f2018876ee309e9cdea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2f7237534acdc0bcc320f39d08cc867707f28206fb1ff6de2bf765637075ed54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7237534acdc0bcc320f39d08cc867707f28206fb1ff6de2bf765637075ed54->enter($__internal_2f7237534acdc0bcc320f39d08cc867707f28206fb1ff6de2bf765637075ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2f7237534acdc0bcc320f39d08cc867707f28206fb1ff6de2bf765637075ed54->leave($__internal_2f7237534acdc0bcc320f39d08cc867707f28206fb1ff6de2bf765637075ed54_prof);

        
        $__internal_f9bb6fe7e818e38294d69e051f9431573ec2be0224a5f2018876ee309e9cdea0->leave($__internal_f9bb6fe7e818e38294d69e051f9431573ec2be0224a5f2018876ee309e9cdea0_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f6417e50989759dc0401d2cdf947ddb532a0f4ddc968a813d3efcd999b425410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6417e50989759dc0401d2cdf947ddb532a0f4ddc968a813d3efcd999b425410->enter($__internal_f6417e50989759dc0401d2cdf947ddb532a0f4ddc968a813d3efcd999b425410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_17cc34ed0d457c12d2fc4ea7ed927fbefb6439d447773a65c7743c6027b3c68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cc34ed0d457c12d2fc4ea7ed927fbefb6439d447773a65c7743c6027b3c68b->enter($__internal_17cc34ed0d457c12d2fc4ea7ed927fbefb6439d447773a65c7743c6027b3c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_17cc34ed0d457c12d2fc4ea7ed927fbefb6439d447773a65c7743c6027b3c68b->leave($__internal_17cc34ed0d457c12d2fc4ea7ed927fbefb6439d447773a65c7743c6027b3c68b_prof);

        
        $__internal_f6417e50989759dc0401d2cdf947ddb532a0f4ddc968a813d3efcd999b425410->leave($__internal_f6417e50989759dc0401d2cdf947ddb532a0f4ddc968a813d3efcd999b425410_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2c067cdde8bc03538ed99b4ac6c5d36a301d750251a20c474b4e2f722f4444d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c067cdde8bc03538ed99b4ac6c5d36a301d750251a20c474b4e2f722f4444d9->enter($__internal_2c067cdde8bc03538ed99b4ac6c5d36a301d750251a20c474b4e2f722f4444d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_430a5ab85304fd97cdaa24e8f804167e16c63ccb8443904ff01d75e0972c85f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430a5ab85304fd97cdaa24e8f804167e16c63ccb8443904ff01d75e0972c85f1->enter($__internal_430a5ab85304fd97cdaa24e8f804167e16c63ccb8443904ff01d75e0972c85f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_430a5ab85304fd97cdaa24e8f804167e16c63ccb8443904ff01d75e0972c85f1->leave($__internal_430a5ab85304fd97cdaa24e8f804167e16c63ccb8443904ff01d75e0972c85f1_prof);

        
        $__internal_2c067cdde8bc03538ed99b4ac6c5d36a301d750251a20c474b4e2f722f4444d9->leave($__internal_2c067cdde8bc03538ed99b4ac6c5d36a301d750251a20c474b4e2f722f4444d9_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_202a9be4c661d51187630a4ef66b47f3cb7155443d03b44978374fa8f97a3a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202a9be4c661d51187630a4ef66b47f3cb7155443d03b44978374fa8f97a3a4b->enter($__internal_202a9be4c661d51187630a4ef66b47f3cb7155443d03b44978374fa8f97a3a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2919cba5dc9ee75de4a36097ba733b14d8469da30b5f0497cad5c71b6648fc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2919cba5dc9ee75de4a36097ba733b14d8469da30b5f0497cad5c71b6648fc2c->enter($__internal_2919cba5dc9ee75de4a36097ba733b14d8469da30b5f0497cad5c71b6648fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2919cba5dc9ee75de4a36097ba733b14d8469da30b5f0497cad5c71b6648fc2c->leave($__internal_2919cba5dc9ee75de4a36097ba733b14d8469da30b5f0497cad5c71b6648fc2c_prof);

        
        $__internal_202a9be4c661d51187630a4ef66b47f3cb7155443d03b44978374fa8f97a3a4b->leave($__internal_202a9be4c661d51187630a4ef66b47f3cb7155443d03b44978374fa8f97a3a4b_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fa45cadd6359a1cb0c94b4cf107b35cad811d19b483b32ecafb110857caa630a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa45cadd6359a1cb0c94b4cf107b35cad811d19b483b32ecafb110857caa630a->enter($__internal_fa45cadd6359a1cb0c94b4cf107b35cad811d19b483b32ecafb110857caa630a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_51e643df9bf3141bb224762d2f2f88b77863e348d05304e6681872e2f90d79cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e643df9bf3141bb224762d2f2f88b77863e348d05304e6681872e2f90d79cc->enter($__internal_51e643df9bf3141bb224762d2f2f88b77863e348d05304e6681872e2f90d79cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_51e643df9bf3141bb224762d2f2f88b77863e348d05304e6681872e2f90d79cc->leave($__internal_51e643df9bf3141bb224762d2f2f88b77863e348d05304e6681872e2f90d79cc_prof);

        
        $__internal_fa45cadd6359a1cb0c94b4cf107b35cad811d19b483b32ecafb110857caa630a->leave($__internal_fa45cadd6359a1cb0c94b4cf107b35cad811d19b483b32ecafb110857caa630a_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7abc97cb834af0845fae6af7be22e4a43bd5de650454bbfd41ba2d134c8e6358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abc97cb834af0845fae6af7be22e4a43bd5de650454bbfd41ba2d134c8e6358->enter($__internal_7abc97cb834af0845fae6af7be22e4a43bd5de650454bbfd41ba2d134c8e6358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aa8cd82c65d82b70d20985bb557e36c41442570b685c863631a464c21eb2876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8cd82c65d82b70d20985bb557e36c41442570b685c863631a464c21eb2876a->enter($__internal_aa8cd82c65d82b70d20985bb557e36c41442570b685c863631a464c21eb2876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aa8cd82c65d82b70d20985bb557e36c41442570b685c863631a464c21eb2876a->leave($__internal_aa8cd82c65d82b70d20985bb557e36c41442570b685c863631a464c21eb2876a_prof);

        
        $__internal_7abc97cb834af0845fae6af7be22e4a43bd5de650454bbfd41ba2d134c8e6358->leave($__internal_7abc97cb834af0845fae6af7be22e4a43bd5de650454bbfd41ba2d134c8e6358_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1e22207fb2ab31cc0382922a497e87b224d87296aa5f203c62f89141fe7f2930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e22207fb2ab31cc0382922a497e87b224d87296aa5f203c62f89141fe7f2930->enter($__internal_1e22207fb2ab31cc0382922a497e87b224d87296aa5f203c62f89141fe7f2930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f2285076a03b09df6248ddf96a9761c7857b4b599933e2bc22a1c0265b2c7803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2285076a03b09df6248ddf96a9761c7857b4b599933e2bc22a1c0265b2c7803->enter($__internal_f2285076a03b09df6248ddf96a9761c7857b4b599933e2bc22a1c0265b2c7803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f2285076a03b09df6248ddf96a9761c7857b4b599933e2bc22a1c0265b2c7803->leave($__internal_f2285076a03b09df6248ddf96a9761c7857b4b599933e2bc22a1c0265b2c7803_prof);

        
        $__internal_1e22207fb2ab31cc0382922a497e87b224d87296aa5f203c62f89141fe7f2930->leave($__internal_1e22207fb2ab31cc0382922a497e87b224d87296aa5f203c62f89141fe7f2930_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f54ab0e15a3eb92e12773bd485cb7b9b0603eef4b6b5113a8932fe159050ea67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54ab0e15a3eb92e12773bd485cb7b9b0603eef4b6b5113a8932fe159050ea67->enter($__internal_f54ab0e15a3eb92e12773bd485cb7b9b0603eef4b6b5113a8932fe159050ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b26a0a7a4a1430f8355be9e7782839acd0f90266ef12ee2f80a4d7a36df7c1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26a0a7a4a1430f8355be9e7782839acd0f90266ef12ee2f80a4d7a36df7c1f3->enter($__internal_b26a0a7a4a1430f8355be9e7782839acd0f90266ef12ee2f80a4d7a36df7c1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b26a0a7a4a1430f8355be9e7782839acd0f90266ef12ee2f80a4d7a36df7c1f3->leave($__internal_b26a0a7a4a1430f8355be9e7782839acd0f90266ef12ee2f80a4d7a36df7c1f3_prof);

        
        $__internal_f54ab0e15a3eb92e12773bd485cb7b9b0603eef4b6b5113a8932fe159050ea67->leave($__internal_f54ab0e15a3eb92e12773bd485cb7b9b0603eef4b6b5113a8932fe159050ea67_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_db9d333ada93e287d0ca1418abcac12de585a29bb6c3d8adba709a6cee2115fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9d333ada93e287d0ca1418abcac12de585a29bb6c3d8adba709a6cee2115fb->enter($__internal_db9d333ada93e287d0ca1418abcac12de585a29bb6c3d8adba709a6cee2115fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9ff70a15bc92b565fe61183a1cc337ec16c327145e2d095feb3226e5c8b403ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff70a15bc92b565fe61183a1cc337ec16c327145e2d095feb3226e5c8b403ae->enter($__internal_9ff70a15bc92b565fe61183a1cc337ec16c327145e2d095feb3226e5c8b403ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9ff70a15bc92b565fe61183a1cc337ec16c327145e2d095feb3226e5c8b403ae->leave($__internal_9ff70a15bc92b565fe61183a1cc337ec16c327145e2d095feb3226e5c8b403ae_prof);

        
        $__internal_db9d333ada93e287d0ca1418abcac12de585a29bb6c3d8adba709a6cee2115fb->leave($__internal_db9d333ada93e287d0ca1418abcac12de585a29bb6c3d8adba709a6cee2115fb_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_83f86a509c3b4b0b02fe33e53767be6997ebe2d45ba9a67644e3d4e4a88df119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f86a509c3b4b0b02fe33e53767be6997ebe2d45ba9a67644e3d4e4a88df119->enter($__internal_83f86a509c3b4b0b02fe33e53767be6997ebe2d45ba9a67644e3d4e4a88df119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_facca9f135d6ef666f78604c79005827b705d2b1066128e57198c68f867a15f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facca9f135d6ef666f78604c79005827b705d2b1066128e57198c68f867a15f1->enter($__internal_facca9f135d6ef666f78604c79005827b705d2b1066128e57198c68f867a15f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_facca9f135d6ef666f78604c79005827b705d2b1066128e57198c68f867a15f1->leave($__internal_facca9f135d6ef666f78604c79005827b705d2b1066128e57198c68f867a15f1_prof);

        
        $__internal_83f86a509c3b4b0b02fe33e53767be6997ebe2d45ba9a67644e3d4e4a88df119->leave($__internal_83f86a509c3b4b0b02fe33e53767be6997ebe2d45ba9a67644e3d4e4a88df119_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b95b3e50e98c305d83644ff7b328bd84658bc020558927c9b62a01a6e5809d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95b3e50e98c305d83644ff7b328bd84658bc020558927c9b62a01a6e5809d1e->enter($__internal_b95b3e50e98c305d83644ff7b328bd84658bc020558927c9b62a01a6e5809d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_163e9b214ca6196ef20d10bcc2e6ff9c1220b31713c3dfd6d141a1c0972b3fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163e9b214ca6196ef20d10bcc2e6ff9c1220b31713c3dfd6d141a1c0972b3fb7->enter($__internal_163e9b214ca6196ef20d10bcc2e6ff9c1220b31713c3dfd6d141a1c0972b3fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_163e9b214ca6196ef20d10bcc2e6ff9c1220b31713c3dfd6d141a1c0972b3fb7->leave($__internal_163e9b214ca6196ef20d10bcc2e6ff9c1220b31713c3dfd6d141a1c0972b3fb7_prof);

        
        $__internal_b95b3e50e98c305d83644ff7b328bd84658bc020558927c9b62a01a6e5809d1e->leave($__internal_b95b3e50e98c305d83644ff7b328bd84658bc020558927c9b62a01a6e5809d1e_prof);

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
