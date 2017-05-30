<?php

/* AddressBookBundle:Default:index.html.twig */
class __TwigTemplate_477d68c0c54c82aa0becc6439a9608ca3e5035979383e29f5d1c50e63fae680e extends Twig_Template
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
        $__internal_23aa431073a16f432f407cf896e0d56fb6d159d9657bbea2e2d9e25c432a9d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23aa431073a16f432f407cf896e0d56fb6d159d9657bbea2e2d9e25c432a9d0f->enter($__internal_23aa431073a16f432f407cf896e0d56fb6d159d9657bbea2e2d9e25c432a9d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_23aa431073a16f432f407cf896e0d56fb6d159d9657bbea2e2d9e25c432a9d0f->leave($__internal_23aa431073a16f432f407cf896e0d56fb6d159d9657bbea2e2d9e25c432a9d0f_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AddressBookBundle:Default:index.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Default/index.html.twig");
    }
}
