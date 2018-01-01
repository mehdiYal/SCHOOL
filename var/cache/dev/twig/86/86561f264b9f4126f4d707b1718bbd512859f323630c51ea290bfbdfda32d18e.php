<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_89f13d610b52d4fdf0099693104e24b1d30a4ba44aa44e612818e33412276554 extends Twig_Template
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
        $__internal_d7889194e28e7e455d832dba43692eda25b3862c05a81b4c7cdf51c8141430ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7889194e28e7e455d832dba43692eda25b3862c05a81b4c7cdf51c8141430ac->enter($__internal_d7889194e28e7e455d832dba43692eda25b3862c05a81b4c7cdf51c8141430ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_faf29bc36242d0ce52c51dbe835ae256070d6b9a1e85510526d0451ecb294611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf29bc36242d0ce52c51dbe835ae256070d6b9a1e85510526d0451ecb294611->enter($__internal_faf29bc36242d0ce52c51dbe835ae256070d6b9a1e85510526d0451ecb294611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_d7889194e28e7e455d832dba43692eda25b3862c05a81b4c7cdf51c8141430ac->leave($__internal_d7889194e28e7e455d832dba43692eda25b3862c05a81b4c7cdf51c8141430ac_prof);

        
        $__internal_faf29bc36242d0ce52c51dbe835ae256070d6b9a1e85510526d0451ecb294611->leave($__internal_faf29bc36242d0ce52c51dbe835ae256070d6b9a1e85510526d0451ecb294611_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a672ae0726631131925140108c9ac5407e1e655559e29fcbd60006098166ae50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a672ae0726631131925140108c9ac5407e1e655559e29fcbd60006098166ae50->enter($__internal_a672ae0726631131925140108c9ac5407e1e655559e29fcbd60006098166ae50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4262310a3ba5d8bf8f644f4dac8ce0723da2e947db58500d1617b2ac45ef0b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4262310a3ba5d8bf8f644f4dac8ce0723da2e947db58500d1617b2ac45ef0b8d->enter($__internal_4262310a3ba5d8bf8f644f4dac8ce0723da2e947db58500d1617b2ac45ef0b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4262310a3ba5d8bf8f644f4dac8ce0723da2e947db58500d1617b2ac45ef0b8d->leave($__internal_4262310a3ba5d8bf8f644f4dac8ce0723da2e947db58500d1617b2ac45ef0b8d_prof);

        
        $__internal_a672ae0726631131925140108c9ac5407e1e655559e29fcbd60006098166ae50->leave($__internal_a672ae0726631131925140108c9ac5407e1e655559e29fcbd60006098166ae50_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3e15cf115783a34f0b0d3414213799f1de34084219284f37f397a0dd878b456e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e15cf115783a34f0b0d3414213799f1de34084219284f37f397a0dd878b456e->enter($__internal_3e15cf115783a34f0b0d3414213799f1de34084219284f37f397a0dd878b456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a03a14cb4d5be126fbe4e338033e251750762438a0d3bd0f555ea4ab55513e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03a14cb4d5be126fbe4e338033e251750762438a0d3bd0f555ea4ab55513e59->enter($__internal_a03a14cb4d5be126fbe4e338033e251750762438a0d3bd0f555ea4ab55513e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a03a14cb4d5be126fbe4e338033e251750762438a0d3bd0f555ea4ab55513e59->leave($__internal_a03a14cb4d5be126fbe4e338033e251750762438a0d3bd0f555ea4ab55513e59_prof);

        
        $__internal_3e15cf115783a34f0b0d3414213799f1de34084219284f37f397a0dd878b456e->leave($__internal_3e15cf115783a34f0b0d3414213799f1de34084219284f37f397a0dd878b456e_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_75721dada7f4bf073c4f477591ef4bd80e818bb53fc6f85ae0b1173ea02ec52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75721dada7f4bf073c4f477591ef4bd80e818bb53fc6f85ae0b1173ea02ec52b->enter($__internal_75721dada7f4bf073c4f477591ef4bd80e818bb53fc6f85ae0b1173ea02ec52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_39767ee12b62d5065d60c18f38cd295b7950b985e7d41146bcabddb253f4d9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39767ee12b62d5065d60c18f38cd295b7950b985e7d41146bcabddb253f4d9e3->enter($__internal_39767ee12b62d5065d60c18f38cd295b7950b985e7d41146bcabddb253f4d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_39767ee12b62d5065d60c18f38cd295b7950b985e7d41146bcabddb253f4d9e3->leave($__internal_39767ee12b62d5065d60c18f38cd295b7950b985e7d41146bcabddb253f4d9e3_prof);

        
        $__internal_75721dada7f4bf073c4f477591ef4bd80e818bb53fc6f85ae0b1173ea02ec52b->leave($__internal_75721dada7f4bf073c4f477591ef4bd80e818bb53fc6f85ae0b1173ea02ec52b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_67a8a6d033345ec2e65b483dbceebb5a79cc818d324a237df27cce48202efda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a8a6d033345ec2e65b483dbceebb5a79cc818d324a237df27cce48202efda0->enter($__internal_67a8a6d033345ec2e65b483dbceebb5a79cc818d324a237df27cce48202efda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_90ccb20152f6c27a5ccdec2b12c443a43de40ed91897ed17fb93858586017e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ccb20152f6c27a5ccdec2b12c443a43de40ed91897ed17fb93858586017e6f->enter($__internal_90ccb20152f6c27a5ccdec2b12c443a43de40ed91897ed17fb93858586017e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_39582fb836b859f5470d79f0cad44983ab8a053b92e952f7243618c762e53962 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_4ecd2e5ecb5ff069adda383f4fe4de4a3c2c1d31ba3764d28c3e42c00f474324 = "{{") && ('' === $__internal_4ecd2e5ecb5ff069adda383f4fe4de4a3c2c1d31ba3764d28c3e42c00f474324 || 0 === strpos($__internal_39582fb836b859f5470d79f0cad44983ab8a053b92e952f7243618c762e53962, $__internal_4ecd2e5ecb5ff069adda383f4fe4de4a3c2c1d31ba3764d28c3e42c00f474324)));
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
        
        $__internal_90ccb20152f6c27a5ccdec2b12c443a43de40ed91897ed17fb93858586017e6f->leave($__internal_90ccb20152f6c27a5ccdec2b12c443a43de40ed91897ed17fb93858586017e6f_prof);

        
        $__internal_67a8a6d033345ec2e65b483dbceebb5a79cc818d324a237df27cce48202efda0->leave($__internal_67a8a6d033345ec2e65b483dbceebb5a79cc818d324a237df27cce48202efda0_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f2b8a07d00c8788106fba541f54a50fb5dcfb21b4750030394d0dd0bb13d5e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b8a07d00c8788106fba541f54a50fb5dcfb21b4750030394d0dd0bb13d5e4f->enter($__internal_f2b8a07d00c8788106fba541f54a50fb5dcfb21b4750030394d0dd0bb13d5e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cadc61441795bc827f4b1a038f66deaba893325680bfb3c1b5b406804456b412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadc61441795bc827f4b1a038f66deaba893325680bfb3c1b5b406804456b412->enter($__internal_cadc61441795bc827f4b1a038f66deaba893325680bfb3c1b5b406804456b412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cadc61441795bc827f4b1a038f66deaba893325680bfb3c1b5b406804456b412->leave($__internal_cadc61441795bc827f4b1a038f66deaba893325680bfb3c1b5b406804456b412_prof);

        
        $__internal_f2b8a07d00c8788106fba541f54a50fb5dcfb21b4750030394d0dd0bb13d5e4f->leave($__internal_f2b8a07d00c8788106fba541f54a50fb5dcfb21b4750030394d0dd0bb13d5e4f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1163d433ca29bb0130ce33109f54e868fdd1210577cf54e074447730e27b54ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1163d433ca29bb0130ce33109f54e868fdd1210577cf54e074447730e27b54ec->enter($__internal_1163d433ca29bb0130ce33109f54e868fdd1210577cf54e074447730e27b54ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_da4753b0a5a16a3b86e969a621b62f3fb1d3b39515e56e8f0ec30663f0d950c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4753b0a5a16a3b86e969a621b62f3fb1d3b39515e56e8f0ec30663f0d950c9->enter($__internal_da4753b0a5a16a3b86e969a621b62f3fb1d3b39515e56e8f0ec30663f0d950c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_da4753b0a5a16a3b86e969a621b62f3fb1d3b39515e56e8f0ec30663f0d950c9->leave($__internal_da4753b0a5a16a3b86e969a621b62f3fb1d3b39515e56e8f0ec30663f0d950c9_prof);

        
        $__internal_1163d433ca29bb0130ce33109f54e868fdd1210577cf54e074447730e27b54ec->leave($__internal_1163d433ca29bb0130ce33109f54e868fdd1210577cf54e074447730e27b54ec_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bf048852ce7223fc0f601fdf1f733b6287b554b44664843fa6994584bf5ceaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf048852ce7223fc0f601fdf1f733b6287b554b44664843fa6994584bf5ceaa7->enter($__internal_bf048852ce7223fc0f601fdf1f733b6287b554b44664843fa6994584bf5ceaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9d7e4a643258eba9733671701226c5773310d721b0051f83390f6327df197eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7e4a643258eba9733671701226c5773310d721b0051f83390f6327df197eea->enter($__internal_9d7e4a643258eba9733671701226c5773310d721b0051f83390f6327df197eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_9d7e4a643258eba9733671701226c5773310d721b0051f83390f6327df197eea->leave($__internal_9d7e4a643258eba9733671701226c5773310d721b0051f83390f6327df197eea_prof);

        
        $__internal_bf048852ce7223fc0f601fdf1f733b6287b554b44664843fa6994584bf5ceaa7->leave($__internal_bf048852ce7223fc0f601fdf1f733b6287b554b44664843fa6994584bf5ceaa7_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_534706c169364da474d92c96e316363403c07053c23b59c8e3715315cc7dda00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534706c169364da474d92c96e316363403c07053c23b59c8e3715315cc7dda00->enter($__internal_534706c169364da474d92c96e316363403c07053c23b59c8e3715315cc7dda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e3dffaebd35fe3a525f347a1e740572a1b2b035b99bf14d95b1d2be8a776f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dffaebd35fe3a525f347a1e740572a1b2b035b99bf14d95b1d2be8a776f1d1->enter($__internal_e3dffaebd35fe3a525f347a1e740572a1b2b035b99bf14d95b1d2be8a776f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_e3dffaebd35fe3a525f347a1e740572a1b2b035b99bf14d95b1d2be8a776f1d1->leave($__internal_e3dffaebd35fe3a525f347a1e740572a1b2b035b99bf14d95b1d2be8a776f1d1_prof);

        
        $__internal_534706c169364da474d92c96e316363403c07053c23b59c8e3715315cc7dda00->leave($__internal_534706c169364da474d92c96e316363403c07053c23b59c8e3715315cc7dda00_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a8f7b20562743c59bff141e9aa06746d5df8dd659934c9bfb482eaa6a1e2d4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f7b20562743c59bff141e9aa06746d5df8dd659934c9bfb482eaa6a1e2d4c7->enter($__internal_a8f7b20562743c59bff141e9aa06746d5df8dd659934c9bfb482eaa6a1e2d4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b8fe53761d2ec5c4f686563631a82e711c93ed88fdf3ae2c6f57e5b9cb11fa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe53761d2ec5c4f686563631a82e711c93ed88fdf3ae2c6f57e5b9cb11fa2d->enter($__internal_b8fe53761d2ec5c4f686563631a82e711c93ed88fdf3ae2c6f57e5b9cb11fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_b8fe53761d2ec5c4f686563631a82e711c93ed88fdf3ae2c6f57e5b9cb11fa2d->leave($__internal_b8fe53761d2ec5c4f686563631a82e711c93ed88fdf3ae2c6f57e5b9cb11fa2d_prof);

        
        $__internal_a8f7b20562743c59bff141e9aa06746d5df8dd659934c9bfb482eaa6a1e2d4c7->leave($__internal_a8f7b20562743c59bff141e9aa06746d5df8dd659934c9bfb482eaa6a1e2d4c7_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_883bbcc78fd3c374fbaf39c6c074341b5b58f673145d4d65b7a67357f953895b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883bbcc78fd3c374fbaf39c6c074341b5b58f673145d4d65b7a67357f953895b->enter($__internal_883bbcc78fd3c374fbaf39c6c074341b5b58f673145d4d65b7a67357f953895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_18e80c7fe9d715fca06fe85660d58967e9dba2d5a5d4e0dba988db4526869120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e80c7fe9d715fca06fe85660d58967e9dba2d5a5d4e0dba988db4526869120->enter($__internal_18e80c7fe9d715fca06fe85660d58967e9dba2d5a5d4e0dba988db4526869120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_18e80c7fe9d715fca06fe85660d58967e9dba2d5a5d4e0dba988db4526869120->leave($__internal_18e80c7fe9d715fca06fe85660d58967e9dba2d5a5d4e0dba988db4526869120_prof);

        
        $__internal_883bbcc78fd3c374fbaf39c6c074341b5b58f673145d4d65b7a67357f953895b->leave($__internal_883bbcc78fd3c374fbaf39c6c074341b5b58f673145d4d65b7a67357f953895b_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5fe59cb7befc5bcae75c59cd1f651a28b7a7a3edb6d26cf1d1a76de53f7738e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe59cb7befc5bcae75c59cd1f651a28b7a7a3edb6d26cf1d1a76de53f7738e3->enter($__internal_5fe59cb7befc5bcae75c59cd1f651a28b7a7a3edb6d26cf1d1a76de53f7738e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_63b8135782aae25b778aafab237ce94c997fc836afad07bc41c778a1d73f2934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b8135782aae25b778aafab237ce94c997fc836afad07bc41c778a1d73f2934->enter($__internal_63b8135782aae25b778aafab237ce94c997fc836afad07bc41c778a1d73f2934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_63b8135782aae25b778aafab237ce94c997fc836afad07bc41c778a1d73f2934->leave($__internal_63b8135782aae25b778aafab237ce94c997fc836afad07bc41c778a1d73f2934_prof);

        
        $__internal_5fe59cb7befc5bcae75c59cd1f651a28b7a7a3edb6d26cf1d1a76de53f7738e3->leave($__internal_5fe59cb7befc5bcae75c59cd1f651a28b7a7a3edb6d26cf1d1a76de53f7738e3_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b3cfe3dec891a5049a6bd08e90dd752b63ff4f1308977c2392d2da3ac4c47483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cfe3dec891a5049a6bd08e90dd752b63ff4f1308977c2392d2da3ac4c47483->enter($__internal_b3cfe3dec891a5049a6bd08e90dd752b63ff4f1308977c2392d2da3ac4c47483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_78220bd725f1b1f94a7c0eabb3daeadc0b433a0a8b3907009bdaf076d34643f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78220bd725f1b1f94a7c0eabb3daeadc0b433a0a8b3907009bdaf076d34643f7->enter($__internal_78220bd725f1b1f94a7c0eabb3daeadc0b433a0a8b3907009bdaf076d34643f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_78220bd725f1b1f94a7c0eabb3daeadc0b433a0a8b3907009bdaf076d34643f7->leave($__internal_78220bd725f1b1f94a7c0eabb3daeadc0b433a0a8b3907009bdaf076d34643f7_prof);

        
        $__internal_b3cfe3dec891a5049a6bd08e90dd752b63ff4f1308977c2392d2da3ac4c47483->leave($__internal_b3cfe3dec891a5049a6bd08e90dd752b63ff4f1308977c2392d2da3ac4c47483_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8291c4f658f86ccb6774741e653d4f67033d05ef44db9725ce0162e646138144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8291c4f658f86ccb6774741e653d4f67033d05ef44db9725ce0162e646138144->enter($__internal_8291c4f658f86ccb6774741e653d4f67033d05ef44db9725ce0162e646138144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0c92c7d25bd132ce473e135b2cfc8a82c885ae558ba9f4283cda955b3c727144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c92c7d25bd132ce473e135b2cfc8a82c885ae558ba9f4283cda955b3c727144->enter($__internal_0c92c7d25bd132ce473e135b2cfc8a82c885ae558ba9f4283cda955b3c727144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0c92c7d25bd132ce473e135b2cfc8a82c885ae558ba9f4283cda955b3c727144->leave($__internal_0c92c7d25bd132ce473e135b2cfc8a82c885ae558ba9f4283cda955b3c727144_prof);

        
        $__internal_8291c4f658f86ccb6774741e653d4f67033d05ef44db9725ce0162e646138144->leave($__internal_8291c4f658f86ccb6774741e653d4f67033d05ef44db9725ce0162e646138144_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_299605e10369b9a2d597d066d174caf02f6dd6e896a4e5839f79a1f1f9110b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299605e10369b9a2d597d066d174caf02f6dd6e896a4e5839f79a1f1f9110b67->enter($__internal_299605e10369b9a2d597d066d174caf02f6dd6e896a4e5839f79a1f1f9110b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_49a1408aaf26bd4bbaa8dc57539089ace081b047f445ab8599c8a38a7fae9d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a1408aaf26bd4bbaa8dc57539089ace081b047f445ab8599c8a38a7fae9d1c->enter($__internal_49a1408aaf26bd4bbaa8dc57539089ace081b047f445ab8599c8a38a7fae9d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_49a1408aaf26bd4bbaa8dc57539089ace081b047f445ab8599c8a38a7fae9d1c->leave($__internal_49a1408aaf26bd4bbaa8dc57539089ace081b047f445ab8599c8a38a7fae9d1c_prof);

        
        $__internal_299605e10369b9a2d597d066d174caf02f6dd6e896a4e5839f79a1f1f9110b67->leave($__internal_299605e10369b9a2d597d066d174caf02f6dd6e896a4e5839f79a1f1f9110b67_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_fa5bcb92aeed49568252754e8a8dfc0958ef1f4ad7c7bda1db309045bee63eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5bcb92aeed49568252754e8a8dfc0958ef1f4ad7c7bda1db309045bee63eae->enter($__internal_fa5bcb92aeed49568252754e8a8dfc0958ef1f4ad7c7bda1db309045bee63eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ef3b3b46ce4d759aaaf23b7884de3ab8a7736e1b7df5c48119553bfc3be50263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3b3b46ce4d759aaaf23b7884de3ab8a7736e1b7df5c48119553bfc3be50263->enter($__internal_ef3b3b46ce4d759aaaf23b7884de3ab8a7736e1b7df5c48119553bfc3be50263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ef3b3b46ce4d759aaaf23b7884de3ab8a7736e1b7df5c48119553bfc3be50263->leave($__internal_ef3b3b46ce4d759aaaf23b7884de3ab8a7736e1b7df5c48119553bfc3be50263_prof);

        
        $__internal_fa5bcb92aeed49568252754e8a8dfc0958ef1f4ad7c7bda1db309045bee63eae->leave($__internal_fa5bcb92aeed49568252754e8a8dfc0958ef1f4ad7c7bda1db309045bee63eae_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6901ce5f16e398ff14408f9aaf5111f3258eba0a5e4325a58214e77475893389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6901ce5f16e398ff14408f9aaf5111f3258eba0a5e4325a58214e77475893389->enter($__internal_6901ce5f16e398ff14408f9aaf5111f3258eba0a5e4325a58214e77475893389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_2201ddd409a47866aac10c249814027cb24bdbb31e472aeeb69c717911ed39ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2201ddd409a47866aac10c249814027cb24bdbb31e472aeeb69c717911ed39ab->enter($__internal_2201ddd409a47866aac10c249814027cb24bdbb31e472aeeb69c717911ed39ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2201ddd409a47866aac10c249814027cb24bdbb31e472aeeb69c717911ed39ab->leave($__internal_2201ddd409a47866aac10c249814027cb24bdbb31e472aeeb69c717911ed39ab_prof);

        
        $__internal_6901ce5f16e398ff14408f9aaf5111f3258eba0a5e4325a58214e77475893389->leave($__internal_6901ce5f16e398ff14408f9aaf5111f3258eba0a5e4325a58214e77475893389_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e11209595c9982ccf0bd068e20a6067e4634153639f0e45559b1ff3e86d323fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11209595c9982ccf0bd068e20a6067e4634153639f0e45559b1ff3e86d323fe->enter($__internal_e11209595c9982ccf0bd068e20a6067e4634153639f0e45559b1ff3e86d323fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5c684ebccf4c7e0e9d18505e314888d29dc439aeca23225f8bf1ef8061a3d307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c684ebccf4c7e0e9d18505e314888d29dc439aeca23225f8bf1ef8061a3d307->enter($__internal_5c684ebccf4c7e0e9d18505e314888d29dc439aeca23225f8bf1ef8061a3d307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5c684ebccf4c7e0e9d18505e314888d29dc439aeca23225f8bf1ef8061a3d307->leave($__internal_5c684ebccf4c7e0e9d18505e314888d29dc439aeca23225f8bf1ef8061a3d307_prof);

        
        $__internal_e11209595c9982ccf0bd068e20a6067e4634153639f0e45559b1ff3e86d323fe->leave($__internal_e11209595c9982ccf0bd068e20a6067e4634153639f0e45559b1ff3e86d323fe_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6d36d4eeeb556142a7f0684759807f5ff5e1515cb3d354abd0001934fe4a7a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d36d4eeeb556142a7f0684759807f5ff5e1515cb3d354abd0001934fe4a7a53->enter($__internal_6d36d4eeeb556142a7f0684759807f5ff5e1515cb3d354abd0001934fe4a7a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_49b4aa7e6d77b790f7370137a9c854f92ec1a1d6b08280687105021cb717fadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b4aa7e6d77b790f7370137a9c854f92ec1a1d6b08280687105021cb717fadf->enter($__internal_49b4aa7e6d77b790f7370137a9c854f92ec1a1d6b08280687105021cb717fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_49b4aa7e6d77b790f7370137a9c854f92ec1a1d6b08280687105021cb717fadf->leave($__internal_49b4aa7e6d77b790f7370137a9c854f92ec1a1d6b08280687105021cb717fadf_prof);

        
        $__internal_6d36d4eeeb556142a7f0684759807f5ff5e1515cb3d354abd0001934fe4a7a53->leave($__internal_6d36d4eeeb556142a7f0684759807f5ff5e1515cb3d354abd0001934fe4a7a53_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9b4ff5ecfacb51ef0f6b74db1ac4ea039f4b94c31a29ae631156579d5e88586c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4ff5ecfacb51ef0f6b74db1ac4ea039f4b94c31a29ae631156579d5e88586c->enter($__internal_9b4ff5ecfacb51ef0f6b74db1ac4ea039f4b94c31a29ae631156579d5e88586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_89d36d256f097d090e479fc584b5f13f160ea0019216d2c2d426a3ff93950059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d36d256f097d090e479fc584b5f13f160ea0019216d2c2d426a3ff93950059->enter($__internal_89d36d256f097d090e479fc584b5f13f160ea0019216d2c2d426a3ff93950059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_89d36d256f097d090e479fc584b5f13f160ea0019216d2c2d426a3ff93950059->leave($__internal_89d36d256f097d090e479fc584b5f13f160ea0019216d2c2d426a3ff93950059_prof);

        
        $__internal_9b4ff5ecfacb51ef0f6b74db1ac4ea039f4b94c31a29ae631156579d5e88586c->leave($__internal_9b4ff5ecfacb51ef0f6b74db1ac4ea039f4b94c31a29ae631156579d5e88586c_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_eba6584a3d8be5a6291293038de831d86fe5abca0ca6c609ff8fab73877ca1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba6584a3d8be5a6291293038de831d86fe5abca0ca6c609ff8fab73877ca1a5->enter($__internal_eba6584a3d8be5a6291293038de831d86fe5abca0ca6c609ff8fab73877ca1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_aae3aab42659290847704ce3809695c8fc32b4d6f833719fecdca15151b77db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae3aab42659290847704ce3809695c8fc32b4d6f833719fecdca15151b77db9->enter($__internal_aae3aab42659290847704ce3809695c8fc32b4d6f833719fecdca15151b77db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_aae3aab42659290847704ce3809695c8fc32b4d6f833719fecdca15151b77db9->leave($__internal_aae3aab42659290847704ce3809695c8fc32b4d6f833719fecdca15151b77db9_prof);

        
        $__internal_eba6584a3d8be5a6291293038de831d86fe5abca0ca6c609ff8fab73877ca1a5->leave($__internal_eba6584a3d8be5a6291293038de831d86fe5abca0ca6c609ff8fab73877ca1a5_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fb4bc1c3b130742d2f62f72a86891f567a955d6e5eb85f7ab382e04cafeb36dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4bc1c3b130742d2f62f72a86891f567a955d6e5eb85f7ab382e04cafeb36dd->enter($__internal_fb4bc1c3b130742d2f62f72a86891f567a955d6e5eb85f7ab382e04cafeb36dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_86b1b918253608058ece44983e6c1513cf265125f257424f04c2e82afa834b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b1b918253608058ece44983e6c1513cf265125f257424f04c2e82afa834b55->enter($__internal_86b1b918253608058ece44983e6c1513cf265125f257424f04c2e82afa834b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_86b1b918253608058ece44983e6c1513cf265125f257424f04c2e82afa834b55->leave($__internal_86b1b918253608058ece44983e6c1513cf265125f257424f04c2e82afa834b55_prof);

        
        $__internal_fb4bc1c3b130742d2f62f72a86891f567a955d6e5eb85f7ab382e04cafeb36dd->leave($__internal_fb4bc1c3b130742d2f62f72a86891f567a955d6e5eb85f7ab382e04cafeb36dd_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3ad30acb6775963743751c8ea814d27f78e8259ddd2e9b1d42f757ed0fbbadb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad30acb6775963743751c8ea814d27f78e8259ddd2e9b1d42f757ed0fbbadb9->enter($__internal_3ad30acb6775963743751c8ea814d27f78e8259ddd2e9b1d42f757ed0fbbadb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_80dc3570e02f846b542e16bd02302463220bd678595547b1bc7c1eb92e670489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dc3570e02f846b542e16bd02302463220bd678595547b1bc7c1eb92e670489->enter($__internal_80dc3570e02f846b542e16bd02302463220bd678595547b1bc7c1eb92e670489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_80dc3570e02f846b542e16bd02302463220bd678595547b1bc7c1eb92e670489->leave($__internal_80dc3570e02f846b542e16bd02302463220bd678595547b1bc7c1eb92e670489_prof);

        
        $__internal_3ad30acb6775963743751c8ea814d27f78e8259ddd2e9b1d42f757ed0fbbadb9->leave($__internal_3ad30acb6775963743751c8ea814d27f78e8259ddd2e9b1d42f757ed0fbbadb9_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_76085c67faeb0560927b1c2bb28457c6221e896d4015e518d6a8698637a04349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76085c67faeb0560927b1c2bb28457c6221e896d4015e518d6a8698637a04349->enter($__internal_76085c67faeb0560927b1c2bb28457c6221e896d4015e518d6a8698637a04349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8b18c6a11edba93a18812c1eb02eb25ece0172bea4e0f1b97f5a9ec488833d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b18c6a11edba93a18812c1eb02eb25ece0172bea4e0f1b97f5a9ec488833d92->enter($__internal_8b18c6a11edba93a18812c1eb02eb25ece0172bea4e0f1b97f5a9ec488833d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b18c6a11edba93a18812c1eb02eb25ece0172bea4e0f1b97f5a9ec488833d92->leave($__internal_8b18c6a11edba93a18812c1eb02eb25ece0172bea4e0f1b97f5a9ec488833d92_prof);

        
        $__internal_76085c67faeb0560927b1c2bb28457c6221e896d4015e518d6a8698637a04349->leave($__internal_76085c67faeb0560927b1c2bb28457c6221e896d4015e518d6a8698637a04349_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_70f17e29d8437ff93d3a286b9ad15691b14e2547af3fc0a53c532b900216075c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f17e29d8437ff93d3a286b9ad15691b14e2547af3fc0a53c532b900216075c->enter($__internal_70f17e29d8437ff93d3a286b9ad15691b14e2547af3fc0a53c532b900216075c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9fbf9649f03a115e51a5ec94dda13938ec2a47285ec0375b2f3c4b9d29157db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbf9649f03a115e51a5ec94dda13938ec2a47285ec0375b2f3c4b9d29157db3->enter($__internal_9fbf9649f03a115e51a5ec94dda13938ec2a47285ec0375b2f3c4b9d29157db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9fbf9649f03a115e51a5ec94dda13938ec2a47285ec0375b2f3c4b9d29157db3->leave($__internal_9fbf9649f03a115e51a5ec94dda13938ec2a47285ec0375b2f3c4b9d29157db3_prof);

        
        $__internal_70f17e29d8437ff93d3a286b9ad15691b14e2547af3fc0a53c532b900216075c->leave($__internal_70f17e29d8437ff93d3a286b9ad15691b14e2547af3fc0a53c532b900216075c_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_97c18799d528c6b2bcbeaa4704c019d6090424c990272786127a446fdb56ccb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c18799d528c6b2bcbeaa4704c019d6090424c990272786127a446fdb56ccb0->enter($__internal_97c18799d528c6b2bcbeaa4704c019d6090424c990272786127a446fdb56ccb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5248fcd0a1699b35b9b2782ba65a5aaac8f8ed6333fe51670fd86104dc3ba967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5248fcd0a1699b35b9b2782ba65a5aaac8f8ed6333fe51670fd86104dc3ba967->enter($__internal_5248fcd0a1699b35b9b2782ba65a5aaac8f8ed6333fe51670fd86104dc3ba967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5248fcd0a1699b35b9b2782ba65a5aaac8f8ed6333fe51670fd86104dc3ba967->leave($__internal_5248fcd0a1699b35b9b2782ba65a5aaac8f8ed6333fe51670fd86104dc3ba967_prof);

        
        $__internal_97c18799d528c6b2bcbeaa4704c019d6090424c990272786127a446fdb56ccb0->leave($__internal_97c18799d528c6b2bcbeaa4704c019d6090424c990272786127a446fdb56ccb0_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_de662b1100cb48717deb79ced0f02c8d61dec6146bf70d05bd278b73b4b6f300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de662b1100cb48717deb79ced0f02c8d61dec6146bf70d05bd278b73b4b6f300->enter($__internal_de662b1100cb48717deb79ced0f02c8d61dec6146bf70d05bd278b73b4b6f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f2c7458688f5365f8898534e6b8d7115f7103cbec37036208d87e6711fe05aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c7458688f5365f8898534e6b8d7115f7103cbec37036208d87e6711fe05aa9->enter($__internal_f2c7458688f5365f8898534e6b8d7115f7103cbec37036208d87e6711fe05aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_f2c7458688f5365f8898534e6b8d7115f7103cbec37036208d87e6711fe05aa9->leave($__internal_f2c7458688f5365f8898534e6b8d7115f7103cbec37036208d87e6711fe05aa9_prof);

        
        $__internal_de662b1100cb48717deb79ced0f02c8d61dec6146bf70d05bd278b73b4b6f300->leave($__internal_de662b1100cb48717deb79ced0f02c8d61dec6146bf70d05bd278b73b4b6f300_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_41eaf9e713e171a9b14dc26263e5dc2cae92cd688384b362413840e27fcd70af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41eaf9e713e171a9b14dc26263e5dc2cae92cd688384b362413840e27fcd70af->enter($__internal_41eaf9e713e171a9b14dc26263e5dc2cae92cd688384b362413840e27fcd70af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2045c9919fbe19de09a49a0dc9429a81ff4e078c816f7628f0fcaf07bf439963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2045c9919fbe19de09a49a0dc9429a81ff4e078c816f7628f0fcaf07bf439963->enter($__internal_2045c9919fbe19de09a49a0dc9429a81ff4e078c816f7628f0fcaf07bf439963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
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
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2045c9919fbe19de09a49a0dc9429a81ff4e078c816f7628f0fcaf07bf439963->leave($__internal_2045c9919fbe19de09a49a0dc9429a81ff4e078c816f7628f0fcaf07bf439963_prof);

        
        $__internal_41eaf9e713e171a9b14dc26263e5dc2cae92cd688384b362413840e27fcd70af->leave($__internal_41eaf9e713e171a9b14dc26263e5dc2cae92cd688384b362413840e27fcd70af_prof);

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
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
