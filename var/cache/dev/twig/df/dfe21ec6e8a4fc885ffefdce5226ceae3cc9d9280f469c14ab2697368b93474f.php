<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12071fb398b148c6df6e21a59b7b71f3ba68172efbda7273fdc260d31c2a720d extends Twig_Template
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
        $__internal_480086c2ab61210af4601a4683404bad1eb3cafa0e402b2b62d5297769a732f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480086c2ab61210af4601a4683404bad1eb3cafa0e402b2b62d5297769a732f1->enter($__internal_480086c2ab61210af4601a4683404bad1eb3cafa0e402b2b62d5297769a732f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b2a0e794389f5258e00717785d72921f0414774acefef1a60b5e61982dd7ba7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a0e794389f5258e00717785d72921f0414774acefef1a60b5e61982dd7ba7f->enter($__internal_b2a0e794389f5258e00717785d72921f0414774acefef1a60b5e61982dd7ba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_480086c2ab61210af4601a4683404bad1eb3cafa0e402b2b62d5297769a732f1->leave($__internal_480086c2ab61210af4601a4683404bad1eb3cafa0e402b2b62d5297769a732f1_prof);

        
        $__internal_b2a0e794389f5258e00717785d72921f0414774acefef1a60b5e61982dd7ba7f->leave($__internal_b2a0e794389f5258e00717785d72921f0414774acefef1a60b5e61982dd7ba7f_prof);

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
