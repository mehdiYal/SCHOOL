<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57dc079c772d6f3aaf4b9ad487ebbe39ce04f933659afe7f2a4483b41fea95de extends Twig_Template
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
        $__internal_a5ef255ec3188826003462ecd43073ea06c9efaf0477177e856fbd8c8ea73ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ef255ec3188826003462ecd43073ea06c9efaf0477177e856fbd8c8ea73ef3->enter($__internal_a5ef255ec3188826003462ecd43073ea06c9efaf0477177e856fbd8c8ea73ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ee0733bda417eddb8c7f2d7956691e84927349d9eab6f0fa72e40cbec1fae543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0733bda417eddb8c7f2d7956691e84927349d9eab6f0fa72e40cbec1fae543->enter($__internal_ee0733bda417eddb8c7f2d7956691e84927349d9eab6f0fa72e40cbec1fae543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a5ef255ec3188826003462ecd43073ea06c9efaf0477177e856fbd8c8ea73ef3->leave($__internal_a5ef255ec3188826003462ecd43073ea06c9efaf0477177e856fbd8c8ea73ef3_prof);

        
        $__internal_ee0733bda417eddb8c7f2d7956691e84927349d9eab6f0fa72e40cbec1fae543->leave($__internal_ee0733bda417eddb8c7f2d7956691e84927349d9eab6f0fa72e40cbec1fae543_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
