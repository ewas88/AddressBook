<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9e96f988e069c060b62c773ed8dc0f62fd54f0347661cb51d4af8d78747bef77 extends Twig_Template
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
        $__internal_1faed14fb5fbc9d9d77867b204989093604d6dbb7e76345366a6ebf3099289b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faed14fb5fbc9d9d77867b204989093604d6dbb7e76345366a6ebf3099289b6->enter($__internal_1faed14fb5fbc9d9d77867b204989093604d6dbb7e76345366a6ebf3099289b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1faed14fb5fbc9d9d77867b204989093604d6dbb7e76345366a6ebf3099289b6->leave($__internal_1faed14fb5fbc9d9d77867b204989093604d6dbb7e76345366a6ebf3099289b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
