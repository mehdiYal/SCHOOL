<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_76f6038beb39054a0be9ae0e32108dfcb82589afe85f4da4b7e44392685eccd5 extends Twig_Template
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
        $__internal_54c3da190a1e30be7bac1ca03b609c9200670b6712f9994754a57235fa1faf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c3da190a1e30be7bac1ca03b609c9200670b6712f9994754a57235fa1faf25->enter($__internal_54c3da190a1e30be7bac1ca03b609c9200670b6712f9994754a57235fa1faf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c58a6bf6d788abc9fbd107687a26362ab51bb709afda88b7b680326530c202eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58a6bf6d788abc9fbd107687a26362ab51bb709afda88b7b680326530c202eb->enter($__internal_c58a6bf6d788abc9fbd107687a26362ab51bb709afda88b7b680326530c202eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_54c3da190a1e30be7bac1ca03b609c9200670b6712f9994754a57235fa1faf25->leave($__internal_54c3da190a1e30be7bac1ca03b609c9200670b6712f9994754a57235fa1faf25_prof);

        
        $__internal_c58a6bf6d788abc9fbd107687a26362ab51bb709afda88b7b680326530c202eb->leave($__internal_c58a6bf6d788abc9fbd107687a26362ab51bb709afda88b7b680326530c202eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
