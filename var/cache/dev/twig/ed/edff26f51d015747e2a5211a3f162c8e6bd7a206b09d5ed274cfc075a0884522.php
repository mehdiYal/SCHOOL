<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_00f355e03a0bc90db8c4e28f76147a25787a5d6d21be115b27b8ca0f21425537 extends Twig_Template
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
        $__internal_fb5a99f7019222a6dd1ed7dca97e5ce6fd142f8294d004fa1d6fc5a0bac34442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5a99f7019222a6dd1ed7dca97e5ce6fd142f8294d004fa1d6fc5a0bac34442->enter($__internal_fb5a99f7019222a6dd1ed7dca97e5ce6fd142f8294d004fa1d6fc5a0bac34442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4e23552a9e5c20b38ac16f6e56d186bc2e0ecdc18630edb57fea9a83c74bc652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e23552a9e5c20b38ac16f6e56d186bc2e0ecdc18630edb57fea9a83c74bc652->enter($__internal_4e23552a9e5c20b38ac16f6e56d186bc2e0ecdc18630edb57fea9a83c74bc652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fb5a99f7019222a6dd1ed7dca97e5ce6fd142f8294d004fa1d6fc5a0bac34442->leave($__internal_fb5a99f7019222a6dd1ed7dca97e5ce6fd142f8294d004fa1d6fc5a0bac34442_prof);

        
        $__internal_4e23552a9e5c20b38ac16f6e56d186bc2e0ecdc18630edb57fea9a83c74bc652->leave($__internal_4e23552a9e5c20b38ac16f6e56d186bc2e0ecdc18630edb57fea9a83c74bc652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
