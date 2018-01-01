<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fc707d8e3357eda8c0f8dc0b58cf980cb494598c1f79c9d5f5c3370f2ff93c0b extends Twig_Template
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
        $__internal_5dd086d93c70beb643c428d16875445f733b80db41d98142b61d04a5ea02f6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd086d93c70beb643c428d16875445f733b80db41d98142b61d04a5ea02f6d1->enter($__internal_5dd086d93c70beb643c428d16875445f733b80db41d98142b61d04a5ea02f6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9c3051cfba7725faadb3edac20076bce62286536d76146e719b77362eb552a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3051cfba7725faadb3edac20076bce62286536d76146e719b77362eb552a59->enter($__internal_9c3051cfba7725faadb3edac20076bce62286536d76146e719b77362eb552a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5dd086d93c70beb643c428d16875445f733b80db41d98142b61d04a5ea02f6d1->leave($__internal_5dd086d93c70beb643c428d16875445f733b80db41d98142b61d04a5ea02f6d1_prof);

        
        $__internal_9c3051cfba7725faadb3edac20076bce62286536d76146e719b77362eb552a59->leave($__internal_9c3051cfba7725faadb3edac20076bce62286536d76146e719b77362eb552a59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
