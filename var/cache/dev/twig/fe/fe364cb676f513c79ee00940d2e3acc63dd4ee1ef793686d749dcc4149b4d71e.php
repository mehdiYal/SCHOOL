<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_e3088eb59a9a46100bd7a3a70dc3af6a3d9fd1286a6c5906601673e2db91742e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d06c49c010e9a4ef0e22c7873c9c10b9070d742cf3305128bf21d173b9bf68ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06c49c010e9a4ef0e22c7873c9c10b9070d742cf3305128bf21d173b9bf68ab->enter($__internal_d06c49c010e9a4ef0e22c7873c9c10b9070d742cf3305128bf21d173b9bf68ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_05749938bd7b0db488e1c3104436cfc91eee835693f3c1e9157c6865496be4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05749938bd7b0db488e1c3104436cfc91eee835693f3c1e9157c6865496be4d5->enter($__internal_05749938bd7b0db488e1c3104436cfc91eee835693f3c1e9157c6865496be4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d06c49c010e9a4ef0e22c7873c9c10b9070d742cf3305128bf21d173b9bf68ab->leave($__internal_d06c49c010e9a4ef0e22c7873c9c10b9070d742cf3305128bf21d173b9bf68ab_prof);

        
        $__internal_05749938bd7b0db488e1c3104436cfc91eee835693f3c1e9157c6865496be4d5->leave($__internal_05749938bd7b0db488e1c3104436cfc91eee835693f3c1e9157c6865496be4d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
