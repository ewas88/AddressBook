<?php

/* AddressBookBundle:Address:add.html.twig */
class __TwigTemplate_49dd25622f2b1744fdedffc010ab7333424ea7da9b5b02cc2472cfab7ffa2a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Address:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2525408c3fa8f4121ac5d059226858973230db02e67bb4079ee5e03de217ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2525408c3fa8f4121ac5d059226858973230db02e67bb4079ee5e03de217ef6->enter($__internal_b2525408c3fa8f4121ac5d059226858973230db02e67bb4079ee5e03de217ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Address:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2525408c3fa8f4121ac5d059226858973230db02e67bb4079ee5e03de217ef6->leave($__internal_b2525408c3fa8f4121ac5d059226858973230db02e67bb4079ee5e03de217ef6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e05ebe9178131924d1a5f3087bd5d55e1ceb028c11740fafcd21f9216f876f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ebe9178131924d1a5f3087bd5d55e1ceb028c11740fafcd21f9216f876f60->enter($__internal_e05ebe9178131924d1a5f3087bd5d55e1ceb028c11740fafcd21f9216f876f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new address";
        echo " ";
        
        $__internal_e05ebe9178131924d1a5f3087bd5d55e1ceb028c11740fafcd21f9216f876f60->leave($__internal_e05ebe9178131924d1a5f3087bd5d55e1ceb028c11740fafcd21f9216f876f60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcf0b51fdb0a32c9ded275f02a56b22fc8266e0bde1dfbf3c142c6c0d64f7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcf0b51fdb0a32c9ded275f02a56b22fc8266e0bde1dfbf3c142c6c0d64f7c5->enter($__internal_2fcf0b51fdb0a32c9ded275f02a56b22fc8266e0bde1dfbf3c142c6c0d64f7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Add or modify address for ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>City:</b> <input type=\"text\" name=\"city\" required><br>
        </p>
        <p>
            <b>Street:</b> <input type=\"text\" name=\"street\" required><br>
        </p>
        <p>
            <b>House number:</b> <input type=\"number\" name=\"house_number\" required><br>
        </p>
        <p>
            <b>Flat number:</b> <input type=\"number\" name=\"flat_number\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

";
        
        $__internal_2fcf0b51fdb0a32c9ded275f02a56b22fc8266e0bde1dfbf3c142c6c0d64f7c5->leave($__internal_2fcf0b51fdb0a32c9ded275f02a56b22fc8266e0bde1dfbf3c142c6c0d64f7c5_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Address:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'Add new address' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Add or modify address for {{ person.name}} {{  person.surname}}</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>City:</b> <input type=\"text\" name=\"city\" required><br>
        </p>
        <p>
            <b>Street:</b> <input type=\"text\" name=\"street\" required><br>
        </p>
        <p>
            <b>House number:</b> <input type=\"number\" name=\"house_number\" required><br>
        </p>
        <p>
            <b>Flat number:</b> <input type=\"number\" name=\"flat_number\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/{{ person.id }}/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

{% endblock %}", "AddressBookBundle:Address:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Address/add.html.twig");
    }
}
