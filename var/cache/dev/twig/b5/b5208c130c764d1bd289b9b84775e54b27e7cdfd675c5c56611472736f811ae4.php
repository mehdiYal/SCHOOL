<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_2f90f12b1746e165e1e08bbd72614451579db64b15176f75b5e12e76b42f1a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f412dd0f986867a52cd176d25b0ef73f3b937e56700940a829a2e738156db164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f412dd0f986867a52cd176d25b0ef73f3b937e56700940a829a2e738156db164->enter($__internal_f412dd0f986867a52cd176d25b0ef73f3b937e56700940a829a2e738156db164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0cb85a7009c7196ee1a47d7d53d1e4e90cf6b77101fc3a9f8e0b31c915197b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb85a7009c7196ee1a47d7d53d1e4e90cf6b77101fc3a9f8e0b31c915197b40->enter($__internal_0cb85a7009c7196ee1a47d7d53d1e4e90cf6b77101fc3a9f8e0b31c915197b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_f412dd0f986867a52cd176d25b0ef73f3b937e56700940a829a2e738156db164->leave($__internal_f412dd0f986867a52cd176d25b0ef73f3b937e56700940a829a2e738156db164_prof);

        
        $__internal_0cb85a7009c7196ee1a47d7d53d1e4e90cf6b77101fc3a9f8e0b31c915197b40->leave($__internal_0cb85a7009c7196ee1a47d7d53d1e4e90cf6b77101fc3a9f8e0b31c915197b40_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_809d2f3001339d454c4828aa0b411ec9a5261641d22d980e5a0a856d28e0a4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809d2f3001339d454c4828aa0b411ec9a5261641d22d980e5a0a856d28e0a4b9->enter($__internal_809d2f3001339d454c4828aa0b411ec9a5261641d22d980e5a0a856d28e0a4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a88056f2052dee51a0204aa497786a411f3cc5c9ffdd921f0d31bbed96e53588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88056f2052dee51a0204aa497786a411f3cc5c9ffdd921f0d31bbed96e53588->enter($__internal_a88056f2052dee51a0204aa497786a411f3cc5c9ffdd921f0d31bbed96e53588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a88056f2052dee51a0204aa497786a411f3cc5c9ffdd921f0d31bbed96e53588->leave($__internal_a88056f2052dee51a0204aa497786a411f3cc5c9ffdd921f0d31bbed96e53588_prof);

        
        $__internal_809d2f3001339d454c4828aa0b411ec9a5261641d22d980e5a0a856d28e0a4b9->leave($__internal_809d2f3001339d454c4828aa0b411ec9a5261641d22d980e5a0a856d28e0a4b9_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ffec7f0abf4d860951223ce7e257f259c15de652ba95c0246044e4fb2a104503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffec7f0abf4d860951223ce7e257f259c15de652ba95c0246044e4fb2a104503->enter($__internal_ffec7f0abf4d860951223ce7e257f259c15de652ba95c0246044e4fb2a104503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ce5379e108951ae4aaffe51e9dd3e9d780aba55f4873a7d421ff5e203d25a599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5379e108951ae4aaffe51e9dd3e9d780aba55f4873a7d421ff5e203d25a599->enter($__internal_ce5379e108951ae4aaffe51e9dd3e9d780aba55f4873a7d421ff5e203d25a599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ce5379e108951ae4aaffe51e9dd3e9d780aba55f4873a7d421ff5e203d25a599->leave($__internal_ce5379e108951ae4aaffe51e9dd3e9d780aba55f4873a7d421ff5e203d25a599_prof);

        
        $__internal_ffec7f0abf4d860951223ce7e257f259c15de652ba95c0246044e4fb2a104503->leave($__internal_ffec7f0abf4d860951223ce7e257f259c15de652ba95c0246044e4fb2a104503_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_db913e8afcf070d262f78856444378ec3821a36d8dccaf9fa14c68fc97fa734e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db913e8afcf070d262f78856444378ec3821a36d8dccaf9fa14c68fc97fa734e->enter($__internal_db913e8afcf070d262f78856444378ec3821a36d8dccaf9fa14c68fc97fa734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ef03d9ae90cfbf72e031a635033fd9862aed2ab237d23f892163fe0539675f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03d9ae90cfbf72e031a635033fd9862aed2ab237d23f892163fe0539675f3e->enter($__internal_ef03d9ae90cfbf72e031a635033fd9862aed2ab237d23f892163fe0539675f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_ef03d9ae90cfbf72e031a635033fd9862aed2ab237d23f892163fe0539675f3e->leave($__internal_ef03d9ae90cfbf72e031a635033fd9862aed2ab237d23f892163fe0539675f3e_prof);

        
        $__internal_db913e8afcf070d262f78856444378ec3821a36d8dccaf9fa14c68fc97fa734e->leave($__internal_db913e8afcf070d262f78856444378ec3821a36d8dccaf9fa14c68fc97fa734e_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3dc3f4f2607b92be2d4cf13b56de433f08b86d91ec85462cb5ab1365fc7656c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc3f4f2607b92be2d4cf13b56de433f08b86d91ec85462cb5ab1365fc7656c0->enter($__internal_3dc3f4f2607b92be2d4cf13b56de433f08b86d91ec85462cb5ab1365fc7656c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9aa994323068fbe83579c9bcb0d3df0b33b5ec4962ba2a4ce0cad35bab662888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa994323068fbe83579c9bcb0d3df0b33b5ec4962ba2a4ce0cad35bab662888->enter($__internal_9aa994323068fbe83579c9bcb0d3df0b33b5ec4962ba2a4ce0cad35bab662888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_9aa994323068fbe83579c9bcb0d3df0b33b5ec4962ba2a4ce0cad35bab662888->leave($__internal_9aa994323068fbe83579c9bcb0d3df0b33b5ec4962ba2a4ce0cad35bab662888_prof);

        
        $__internal_3dc3f4f2607b92be2d4cf13b56de433f08b86d91ec85462cb5ab1365fc7656c0->leave($__internal_3dc3f4f2607b92be2d4cf13b56de433f08b86d91ec85462cb5ab1365fc7656c0_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_52d254dad875b9d87703a4afe0f2b05aefde1befdebccd3e25795d49355e5d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d254dad875b9d87703a4afe0f2b05aefde1befdebccd3e25795d49355e5d55->enter($__internal_52d254dad875b9d87703a4afe0f2b05aefde1befdebccd3e25795d49355e5d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9988798b5b3982f430846cf89b116b2e8d31a7bb832b69815eda7c4e77961a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9988798b5b3982f430846cf89b116b2e8d31a7bb832b69815eda7c4e77961a13->enter($__internal_9988798b5b3982f430846cf89b116b2e8d31a7bb832b69815eda7c4e77961a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9988798b5b3982f430846cf89b116b2e8d31a7bb832b69815eda7c4e77961a13->leave($__internal_9988798b5b3982f430846cf89b116b2e8d31a7bb832b69815eda7c4e77961a13_prof);

        
        $__internal_52d254dad875b9d87703a4afe0f2b05aefde1befdebccd3e25795d49355e5d55->leave($__internal_52d254dad875b9d87703a4afe0f2b05aefde1befdebccd3e25795d49355e5d55_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_73fe27cdfd59c4bbdeb4376246a7da5f730a50294ab463fa538ffd594083cd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fe27cdfd59c4bbdeb4376246a7da5f730a50294ab463fa538ffd594083cd81->enter($__internal_73fe27cdfd59c4bbdeb4376246a7da5f730a50294ab463fa538ffd594083cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4de7efa033bdf885316b9307284c00329cf50f6f80a94bddc420c78623570060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de7efa033bdf885316b9307284c00329cf50f6f80a94bddc420c78623570060->enter($__internal_4de7efa033bdf885316b9307284c00329cf50f6f80a94bddc420c78623570060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4de7efa033bdf885316b9307284c00329cf50f6f80a94bddc420c78623570060->leave($__internal_4de7efa033bdf885316b9307284c00329cf50f6f80a94bddc420c78623570060_prof);

        
        $__internal_73fe27cdfd59c4bbdeb4376246a7da5f730a50294ab463fa538ffd594083cd81->leave($__internal_73fe27cdfd59c4bbdeb4376246a7da5f730a50294ab463fa538ffd594083cd81_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f660530fbb1b7693059aa356a7f3c3f46500150150ef4d2ce1bc7bb18596d90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f660530fbb1b7693059aa356a7f3c3f46500150150ef4d2ce1bc7bb18596d90c->enter($__internal_f660530fbb1b7693059aa356a7f3c3f46500150150ef4d2ce1bc7bb18596d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_40d506c7ee75b3cd0852897d5b1b4c1f7be8da3b1faed88bd722a39f96ec239a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d506c7ee75b3cd0852897d5b1b4c1f7be8da3b1faed88bd722a39f96ec239a->enter($__internal_40d506c7ee75b3cd0852897d5b1b4c1f7be8da3b1faed88bd722a39f96ec239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_40d506c7ee75b3cd0852897d5b1b4c1f7be8da3b1faed88bd722a39f96ec239a->leave($__internal_40d506c7ee75b3cd0852897d5b1b4c1f7be8da3b1faed88bd722a39f96ec239a_prof);

        
        $__internal_f660530fbb1b7693059aa356a7f3c3f46500150150ef4d2ce1bc7bb18596d90c->leave($__internal_f660530fbb1b7693059aa356a7f3c3f46500150150ef4d2ce1bc7bb18596d90c_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_14e4e849ab47fac9f885d4768a5a954255ac7b8d324d4fa67f489bad1e445c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e4e849ab47fac9f885d4768a5a954255ac7b8d324d4fa67f489bad1e445c8d->enter($__internal_14e4e849ab47fac9f885d4768a5a954255ac7b8d324d4fa67f489bad1e445c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6ef5396a8086b53a40fa3b269ab73bd82b7b7e8e105f397bc7d955d2c36f5ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef5396a8086b53a40fa3b269ab73bd82b7b7e8e105f397bc7d955d2c36f5ac3->enter($__internal_6ef5396a8086b53a40fa3b269ab73bd82b7b7e8e105f397bc7d955d2c36f5ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6ef5396a8086b53a40fa3b269ab73bd82b7b7e8e105f397bc7d955d2c36f5ac3->leave($__internal_6ef5396a8086b53a40fa3b269ab73bd82b7b7e8e105f397bc7d955d2c36f5ac3_prof);

        
        $__internal_14e4e849ab47fac9f885d4768a5a954255ac7b8d324d4fa67f489bad1e445c8d->leave($__internal_14e4e849ab47fac9f885d4768a5a954255ac7b8d324d4fa67f489bad1e445c8d_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_021058f2215564bf49b53efed4ae5f2527cc81965db20e0d6e11a2f7bc394862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021058f2215564bf49b53efed4ae5f2527cc81965db20e0d6e11a2f7bc394862->enter($__internal_021058f2215564bf49b53efed4ae5f2527cc81965db20e0d6e11a2f7bc394862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_61ee48ace74c5843554d334a54988d16cd84303502b5a6b47c0d9424e40de8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ee48ace74c5843554d334a54988d16cd84303502b5a6b47c0d9424e40de8cd->enter($__internal_61ee48ace74c5843554d334a54988d16cd84303502b5a6b47c0d9424e40de8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_61ee48ace74c5843554d334a54988d16cd84303502b5a6b47c0d9424e40de8cd->leave($__internal_61ee48ace74c5843554d334a54988d16cd84303502b5a6b47c0d9424e40de8cd_prof);

        
        $__internal_021058f2215564bf49b53efed4ae5f2527cc81965db20e0d6e11a2f7bc394862->leave($__internal_021058f2215564bf49b53efed4ae5f2527cc81965db20e0d6e11a2f7bc394862_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_89dba0e94af0066f33d9e087c4308809910ae2965a0e9158b8d8929aa9309ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89dba0e94af0066f33d9e087c4308809910ae2965a0e9158b8d8929aa9309ecd->enter($__internal_89dba0e94af0066f33d9e087c4308809910ae2965a0e9158b8d8929aa9309ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_fd2aebd88c155c7e6413c58972a758ca6c48c4e47cd45b9b7a83520f6cf5d48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2aebd88c155c7e6413c58972a758ca6c48c4e47cd45b9b7a83520f6cf5d48b->enter($__internal_fd2aebd88c155c7e6413c58972a758ca6c48c4e47cd45b9b7a83520f6cf5d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_fd2aebd88c155c7e6413c58972a758ca6c48c4e47cd45b9b7a83520f6cf5d48b->leave($__internal_fd2aebd88c155c7e6413c58972a758ca6c48c4e47cd45b9b7a83520f6cf5d48b_prof);

        
        $__internal_89dba0e94af0066f33d9e087c4308809910ae2965a0e9158b8d8929aa9309ecd->leave($__internal_89dba0e94af0066f33d9e087c4308809910ae2965a0e9158b8d8929aa9309ecd_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
